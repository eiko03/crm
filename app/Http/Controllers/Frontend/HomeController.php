<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\AboutSection;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogSection;
use App\Models\Admin\Contact;
use App\Models\Admin\ContactSection;
use App\Models\Admin\Counter;
use App\Models\Admin\Faq;
use App\Models\Admin\FaqSection;
use App\Models\Admin\FixedContent;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Skill;
use App\Models\Admin\SkillSection;
use App\Models\Admin\Social;
use App\Models\Admin\Solition;
use App\Models\Admin\SolitionSection;
use App\Models\Admin\Sponsor;
use App\Models\Admin\SponsorSection;
use App\Models\Admin\Team;
use App\Models\Admin\TeamSection;
use App\Models\Admin\Testimonial;
use App\Models\Admin\TestimonialSection;
use App\Models\Admin\Work;
use App\Models\Admin\WorkProcess;
use App\Models\Admin\WorkProcessSection;
use App\Models\Admin\WorkSection;
use App\Models\Admin\Industry;
use App\Models\Admin\IndustrySection;

class HomeController extends Controller
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

        // Retrieve models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $fixed_content = FixedContent::where('language_id', $language->id)->first();
        $solution_section = SolitionSection::where('language_id', $language->id)->first();
        $solutions = Solition::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $about_section = AboutSection::where('language_id', $language->id)->first();
        $abouts = About::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $work_process_section = WorkProcessSection::where('language_id', $language->id)->first();
        $work_processes = WorkProcess::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $industry_section = IndustrySection::where('language_id', $language->id)->first();
        $industries = Industry::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $skill_section = SkillSection::where('language_id', $language->id)->first();
        $skills = Skill::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $testimonial_section = TestimonialSection::where('language_id', $language->id)->first();
        $testimonials = Testimonial::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $counters = Counter::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $blog_section = BlogSection::where('language_id', $language->id)->first();
        $recent_posts = Blog::join("categories", 'categories.id', '=', 'blogs.category_id')
            ->where('categories.language_id', $language->id)
            ->where('categories.status', 1)
            ->where('blogs.status', 1)
            ->orderBy('blogs.id', 'desc')
            ->take(3)
            ->get();
        $work_section = WorkSection::where('language_id', $language->id)->first();
        $recent_works = Work::join("work_categories", 'work_categories.id', '=', 'works.work_category_id')
            ->where('work_categories.language_id', $language->id)
            ->where('work_categories.status', 1)
            ->where('works.status', 1)
            ->orderBy('works.id', 'desc')
            ->take(4)
            ->get();
        $sponsor_section = SponsorSection::where('language_id', $language->id)->first();
        $sponsors = Sponsor::orderBy('order', 'asc')->get();

        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();



        return view('frontend.home.home1.index', compact('google_analytic', 'site_info', 'socials',
            'fixed_content', 'solution_section', 'solutions', 'about_section', 'abouts', 'work_process_section',
            'work_processes', 'industry_section', 'industries', 'skill_section', 'skills', 'testimonial_section',
            'testimonials', 'counters', 'blog_section', 'recent_posts', 'sponsors', 'sponsor_section', 'header_pages',
            'footer_pages', 'work_section', 'recent_works'));
    }

}
