<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use App\Models\Admin\ContactSection;
use App\Models\Admin\GoogleAnalytic;
use App\Models\Admin\Page;
use App\Models\Admin\SiteInfo;
use App\Models\Admin\Social;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contact_section = ContactSection::where('language_id', $language->id)->first();
        $contacts = Contact::where('language_id', $language->id)->orderBy('order', 'asc')->get();

        return view('frontend.contact.index', compact('google_analytic', 'site_info',
            'socials', 'header_pages', 'footer_pages', 'contact_section', 'contacts'));
    }

}
