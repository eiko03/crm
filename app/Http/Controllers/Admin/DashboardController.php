<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use App\Models\Admin\Skill;
use App\Models\Admin\Sponsor;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
use App\Models\Admin\Work;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieving models for Landing Site
        $blogs_count = Blog::all()->count();
        $works_count = Work::all()->count();
        $teams_count = Team::all()->count();
        $skills_count = Skill::all()->count();
        $sponsors_count = Sponsor::all()->count();
        $faqs_count = Faq::all()->count();
        $testimonials_count = Testimonial::all()->count();
        $pages_count = Page::all()->count();

        return view('admin.dashboard', compact('blogs_count',
             'works_count', 'teams_count', 'skills_count', 'sponsors_count',
                'faqs_count', 'testimonials_count', 'pages_count'));

    }

}
