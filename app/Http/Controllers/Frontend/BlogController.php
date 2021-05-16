<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Breadcrumb;
use App\Models\Admin\Category;
use App\Models\Admin\Contact;
use App\Models\Admin\ContactSection;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Social;
use App\Models\Admin\Sponsor;
use App\Models\Frontend\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get site language
        $language = getSiteLanguage();

        // Retrieving models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();
        $blogs = Blog::join("categories",'categories.id', '=', 'blogs.category_id')
            ->where('categories.language_id', $language->id)
            ->where('categories.status', 1)
            ->where('blogs.status', 1)
            ->orderBy('blogs.id', 'desc')
            ->get();

        return view('frontend.blog.index', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Get site language
        $language = getSiteLanguage();

        // Retrieving models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();
        $blog = Blog::where('blogs.slug', '=', $slug)
            ->firstOrFail();
        $recent_posts = Blog::join("categories", 'categories.id', '=', 'blogs.category_id')
            ->where('categories.language_id', $language->id)
            ->where('categories.status', 1)
            ->where('blogs.status', 1)
            ->orderBy('blogs.view', 'desc')
            ->take(3)
            ->get();

        if(isset($blog)){
            // Previous blog
            $previous_id = Blog::where('id', '<', $blog->id)->where('status', 1)->max('id');
            $previous = Blog::where('id', $previous_id)->first();

            // Next blog
            $next_id = Blog::where('id', '>', $blog->id)->where('status', 1)->min('id');
            $next = Blog::where('id', $next_id)->first();

            // Update view column
            Blog::find($blog->id)->update(
                ['view' => $blog->view + 1]
            );
        }

        // Get comments
        $comments = Comment::where('blog_id', '=', $blog->id)->where('approval', '=', 1)->get();

        $blog_count_categories = Blog::select(DB::raw('count(*) as category_count, category_id'))
            ->where('language_id', $language->id)
            ->where('blogs.status', 1)
            ->groupBy('category_id')
            ->get();

        return view('frontend.blog.show', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'blog', 'comments', 'blog_count_categories',
            'recent_posts', 'previous', 'next'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $category_name
     * @return \Illuminate\Http\Response
     */
    public function category_show($category_name)
    {
        // Get site language
        $language = getSiteLanguage();

        // Retrieving models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();
        $blogs = Blog::join("categories",'categories.id', '=', 'blogs.category_id')
            ->where('categories.language_id', $language->id)
            ->where('categories.category_slug', '=', $category_name)
            ->where('blogs.status', 1)
            ->orderBy('blogs.id', 'desc')
            ->get();
        $category =  Category::where('language_id', $language->id)
            ->where('category_slug', '=', $category_name)->first();

        if (count($blogs) < 1) {
            abort(404);
        }

        return view('frontend.blog.category-show', compact('blogs', 'category',
            'site_info', 'google_analytic', 'socials', 'header_pages', 'footer_pages'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // Get site language
        $language = getSiteLanguage();

        // Retrieving models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();

        // Search
        $search = $request->get('search');

        $blogs = Blog::join("categories",'categories.id', '=', 'blogs.category_id')
            ->where('categories.language_id', $language->id)
            ->where('categories.status', 1)
            ->where('blogs.status', 1)
            ->where('title', 'like', '%'.$search.'%')
            ->orderBy('blogs.id', 'desc')
            ->get();

        return view('frontend.blog.search-index', compact ('blogs',
            'site_info', 'google_analytic', 'socials', 'footer_pages', 'header_pages'));
    }

}
