<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutCompany;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Social;
use App\Models\Admin\Team;
use App\Models\Admin\TeamSection;
use App\Models\Admin\WhyChoose;
use App\Models\Admin\WhyChooseSection;

class AboutCompanyController extends Controller
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
        $about_company = AboutCompany::where('language_id', $language->id)->first();
        $why_choose_section = WhyChooseSection::where('language_id', $language->id)->first();
        $why_chooses = WhyChoose::where('language_id', $language->id)->orderBy('order', 'asc')->get();
        $team_section = TeamSection::where('language_id', $language->id)->first();
        $teams = Team::where('language_id', $language->id)->orderBy('order', 'asc')
            ->take(4)
            ->get();

        return view('frontend.about_company.index', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'about_company', 'why_choose_section',
            'why_chooses', 'team_section', 'teams'));
    }

}
