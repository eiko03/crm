<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Social;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($page_slug)
    {
        // Get site language
        $language = getSiteLanguage();

        // Retrieving models
        $google_analytic = GoogleAnalytic::first();
        $site_info = SiteInfo::where('language_id', $language->id)->first();
        $socials = Social::where('status', 1)->get();
        $header_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 0)->where('status', 1)->orderBy('order', 'asc')->get();
        $footer_pages = Page::where('language_id', $language->id)->where('display_footer_menu', 1)->where('status', 1)->orderBy('order', 'asc')->get();
        $page = Page::where('pages.page_slug', '=', $page_slug)
            ->firstOrFail();

        return view('frontend.page.show', compact('google_analytic', 'site_info', 'socials',
            'header_pages', 'footer_pages', 'page'));
    }

}
