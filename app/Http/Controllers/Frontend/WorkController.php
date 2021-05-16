<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Social;
use App\Models\Admin\Work;
use App\Models\Admin\WorkStep;
use App\Models\Admin\WorkItem;
use Illuminate\Http\Request;

class WorkController extends Controller
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
        $works = Work::join("work_categories",'work_categories.id', '=', 'works.work_category_id')
            ->where('work_categories.language_id', $language->id)
            ->where('work_categories.status', 1)
            ->where('works.status', 1)
            ->orderBy('works.id', 'desc')
            ->get();


        return view('frontend.work.index', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'works'));
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
        $work = Work::where('works.work_slug', '=', $slug)
            ->firstOrFail();
        $work_steps = WorkStep::where('work_id', $work->id)->orderBy('order', 'asc')->get();
        $work_items = WorkItem::where('work_id', $work->id)->orderBy('order', 'asc')->get();

        if(isset($work)){
            // Previous blog
            $previous_id = Work::where('id', '<', $work->id)->where('status', 1)->max('id');
            $previous = Work::where('id', $previous_id)->first();

            // Next blog
            $next_id = Work::where('id', '>', $work->id)->where('status', 1)->min('id');
            $next = Work::where('id', $next_id)->first();

            // Update view column
            Work::find($work->id)->update(
                ['view' => $work->view + 1]
            );
        }

        return view('frontend.work.show', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'work', 'work_steps', 'work_items', 'previous', 'next'));
    }


}
