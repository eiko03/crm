<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ContentFiveGroupKeyword;
use App\Models\Admin\ContentFourGroupKeyword;
use App\Models\Admin\ContentOneGroupKeyword;
use App\Models\Admin\ContentSixGroupKeyword;
use App\Models\Admin\ContentThreeGroupKeyword;
use App\Models\Admin\ContentTwoGroupKeyword;
use App\Models\Admin\FrontendOneGroupKeyword;
use App\Models\Admin\FrontendTwoGroupKeyword;
use Illuminate\Http\Request;

class LanguageKeywordController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // Retrieving a model
        $content_one_group_keyword = ContentOneGroupKeyword::where('language_id', $id)->first();
        $content_two_group_keyword = ContentTwoGroupKeyword::where('language_id', $id)->first();
        $content_three_group_keyword = ContentThreeGroupKeyword::where('language_id', $id)->first();
        $content_four_group_keyword = ContentFourGroupKeyword::where('language_id', $id)->first();
        $content_five_group_keyword = ContentFiveGroupKeyword::where('language_id', $id)->first();
        $content_six_group_keyword = ContentSixGroupKeyword::where('language_id', $id)->first();

        return view('admin.language.keyword.for_adminpanel.create', compact('id',
            'content_one_group_keyword', 'content_two_group_keyword', 'content_three_group_keyword',
               'content_four_group_keyword', 'content_five_group_keyword', 'content_six_group_keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend_create($id)
    {
        // Retrieving a model
        $frontend_one_group_keyword = FrontendOneGroupKeyword::where('language_id', $id)->first();
        $frontend_two_group_keyword = FrontendTwoGroupKeyword::where('language_id', $id)->first();

        return view('admin.language.keyword.for_frontend.create', compact('id',
            'frontend_one_group_keyword', 'frontend_two_group_keyword'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_one_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_one_group_keywords',
            'dashboard' => 'required',
            'home' => 'required',
            'fixed_content' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'btn_name' => 'required',
            'btn_link' => 'required',
            'submit' => 'required',
            'solutions' => 'required',
            'section_title_and_desc' => 'required',
            'top_title' => 'required',
            'add_solution' => 'required',
            'add_new' => 'required',
            'icon' => 'required',
            'order' => 'required',
            'action' => 'required',
            'edit_solution' => 'required',
            'about' => 'required',
            'video_link' => 'required',
            'image' => 'required',
            'size' => 'required',
            'recommended_size' => 'required',
            'created_successfully' => 'required',
            'updated_successfully' => 'required',
            'deleted_successfully' => 'required',
            'current_image' => 'required',
            'not_yet_created' => 'required',
            'delete' => 'required',
            'close' => 'required',
            'you_wont_be_able_to_revert_this' => 'required',
            'cancel' => 'required',
            'yes_delete_it' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentOneGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'dashboard' => $input['dashboard'],
            'home' => $input['home'],
            'fixed_content' => $input['fixed_content'],
            'title' => $input['title'],
            'desc' => $input['desc'],
            'btn_name' => $input['btn_name'],
            'btn_link' => $input['btn_link'],
            'submit' => $input['submit'],
            'solutions' => $input['solutions'],
            'section_title_and_desc' => $input['section_title_and_desc'],
            'top_title' => $input['top_title'],
            'add_solution' => $input['add_solution'],
            'add_new' => $input['add_new'],
            'icon' => $input['icon'],
            'order' => $input['order'],
            'action' => $input['action'],
            'edit_solution' => $input['edit_solution'],
            'about' => $input['about'],
            'video_link' => $input['video_link'],
            'image' => $input['image'],
            'size' => $input['size'],
            'recommended_size' => $input['recommended_size'],
            'created_successfully' => $input['created_successfully'],
            'updated_successfully' => $input['updated_successfully'],
            'deleted_successfully' => $input['deleted_successfully'],
            'current_image' => $input['current_image'],
            'not_yet_created' => $input['not_yet_created'],
            'delete' => $input['delete'],
            'close' => $input['close'],
            'you_wont_be_able_to_revert_this' => $input['you_wont_be_able_to_revert_this'],
            'cancel' => $input['cancel'],
            'yes_delete_it' => $input['yes_delete_it'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_one_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'dashboard' => 'required',
            'home' => 'required',
            'fixed_content' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'btn_name' => 'required',
            'btn_link' => 'required',
            'submit' => 'required',
            'solutions' => 'required',
            'section_title_and_desc' => 'required',
            'top_title' => 'required',
            'add_solution' => 'required',
            'add_new' => 'required',
            'icon' => 'required',
            'order' => 'required',
            'action' => 'required',
            'edit_solution' => 'required',
            'about' => 'required',
            'video_link' => 'required',
            'image' => 'required',
            'size' => 'required',
            'recommended_size' => 'required',
            'created_successfully' => 'required',
            'updated_successfully' => 'required',
            'deleted_successfully' => 'required',
            'current_image' => 'required',
            'not_yet_created' => 'required',
            'delete' => 'required',
            'close' => 'required',
            'you_wont_be_able_to_revert_this' => 'required',
            'cancel' => 'required',
            'yes_delete_it' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_one_group_keyword = ContentOneGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentOneGroupKeyword::find($content_one_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_two_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_two_group_keywords',
            'add_about' => 'required',
            'tab_name' => 'required',
            'edit_about' => 'required',
            'work_process' => 'required',
            'add_work_process' => 'required',
            'edit_work_process' => 'required',
            'industries' => 'required',
            'add_industry' => 'required',
            'link' => 'required',
            'edit_industry' => 'required',
            'skills' => 'required',
            'add_skill' => 'required',
            'percent_rate' => 'required',
            'edit_skill' => 'required',
            'testimonials' => 'required',
            'name' => 'required',
            'job' => 'required',
            'star' => 'required',
            'select_your_option' => 'required',
            'enable' => 'required',
            'disable' => 'required',
            'edit_testimonial' => 'required',
            'counters' => 'required',
            'add_counter' => 'required',
            'timer' => 'required',
            'edit_counter' => 'required',
            'sponsors' => 'required',
            'add_sponsor' => 'required',
            'edit_sponsor' => 'required',
            'blogs' => 'required',
            'categories' => 'required',
            'add_category' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentTwoGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'add_about' => $input['add_about'],
            'tab_name' => $input['tab_name'],
            'edit_about' => $input['edit_about'],
            'work_process' => $input['work_process'],
            'add_work_process' => $input['add_work_process'],
            'edit_work_process' => $input['edit_work_process'],
            'industries' => $input['industries'],
            'add_industry' => $input['add_industry'],
            'link' => $input['link'],
            'edit_industry' => $input['edit_industry'],
            'skills' => $input['skills'],
            'add_skill' => $input['add_skill'],
            'percent_rate' => $input['percent_rate'],
            'edit_skill' => $input['edit_skill'],
            'testimonials' => $input['testimonials'],
            'name' => $input['name'],
            'job' => $input['job'],
            'star' => $input['star'],
            'select_your_option' => $input['select_your_option'],
            'enable' => $input['enable'],
            'disable' => $input['disable'],
            'edit_testimonial' => $input['edit_testimonial'],
            'counters' => $input['counters'],
            'add_counter' => $input['add_counter'],
            'timer' => $input['timer'],
            'edit_counter' => $input['edit_counter'],
            'sponsors' => $input['sponsors'],
            'add_sponsor' => $input['add_sponsor'],
            'edit_sponsor' => $input['edit_sponsor'],
            'blogs' => $input['blogs'],
            'categories' => $input['categories'],
            'add_category' => $input['add_category'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_two_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'add_about' => 'required',
            'tab_name' => 'required',
            'edit_about' => 'required',
            'work_process' => 'required',
            'add_work_process' => 'required',
            'edit_work_process' => 'required',
            'industries' => 'required',
            'add_industry' => 'required',
            'link' => 'required',
            'edit_industry' => 'required',
            'skills' => 'required',
            'add_skill' => 'required',
            'percent_rate' => 'required',
            'edit_skill' => 'required',
            'testimonials' => 'required',
            'name' => 'required',
            'job' => 'required',
            'star' => 'required',
            'select_your_option' => 'required',
            'enable' => 'required',
            'disable' => 'required',
            'edit_testimonial' => 'required',
            'counters' => 'required',
            'add_counter' => 'required',
            'timer' => 'required',
            'edit_counter' => 'required',
            'sponsors' => 'required',
            'add_sponsor' => 'required',
            'edit_sponsor' => 'required',
            'blogs' => 'required',
            'categories' => 'required',
            'add_category' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_two_group_keyword = ContentTwoGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentTwoGroupKeyword::find($content_two_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_three_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_three_group_keywords',
            'edit_category' => 'required',
            'category_name' => 'required',
            'status' => 'required',
            'add_blog' => 'required',
            'edit_blog' => 'required',
            'short_desc' => 'required',
            'tag' => 'required',
            'separate_with_commas' => 'required',
            'author' => 'required',
            'category' => 'required',
            'post_date' => 'required',
            'view' => 'required',
            'works' => 'required',
            'add_work' => 'required',
            'results' => 'required',
            'optional_features' => 'required',
            'items' => 'required',
            'steps' => 'required',
            'edit_work' => 'required',
            'work_items' => 'required',
            'edit_work_item' => 'required',
            'work_steps' => 'required',
            'add_work_step' => 'required',
            'edit_work_step' => 'required',
            'company' => 'required',
            'about_company' => 'required',
            'experience' => 'required',
            'experience_desc' => 'required',
            'why_choose' => 'required',
            'add_why_choose' => 'required',
            'edit_why_choose' => 'required',
            'teams' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentThreeGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'edit_category' => $input['edit_category'],
            'category_name' => $input['category_name'],
            'status' => $input['status'],
            'add_blog' => $input['add_blog'],
            'edit_blog' => $input['edit_blog'],
            'short_desc' => $input['short_desc'],
            'tag' => $input['tag'],
            'separate_with_commas' => $input['separate_with_commas'],
            'author' => $input['author'],
            'category' => $input['category'],
            'post_date' => $input['post_date'],
            'view' => $input['view'],
            'works' => $input['works'],
            'add_work' => $input['add_work'],
            'results' => $input['results'],
            'optional_features' => $input['optional_features'],
            'items' => $input['items'],
            'steps' => $input['steps'],
            'edit_work' => $input['edit_work'],
            'work_items' => $input['work_items'],
            'edit_work_item' => $input['edit_work_item'],
            'work_steps' => $input['work_steps'],
            'add_work_step' => $input['add_work_step'],
            'edit_work_step' => $input['edit_work_step'],
            'company' => $input['company'],
            'about_company' => $input['about_company'],
            'experience' => $input['experience'],
            'experience_desc' => $input['experience_desc'],
            'why_choose' => $input['why_choose'],
            'add_why_choose' => $input['add_why_choose'],
            'edit_why_choose' => $input['edit_why_choose'],
            'teams' => $input['teams'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_three_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'edit_category' => 'required',
            'category_name' => 'required',
            'status' => 'required',
            'add_blog' => 'required',
            'edit_blog' => 'required',
            'short_desc' => 'required',
            'tag' => 'required',
            'separate_with_commas' => 'required',
            'author' => 'required',
            'category' => 'required',
            'post_date' => 'required',
            'view' => 'required',
            'works' => 'required',
            'add_work' => 'required',
            'results' => 'required',
            'optional_features' => 'required',
            'items' => 'required',
            'steps' => 'required',
            'edit_work' => 'required',
            'work_items' => 'required',
            'edit_work_item' => 'required',
            'work_steps' => 'required',
            'add_work_step' => 'required',
            'edit_work_step' => 'required',
            'company' => 'required',
            'about_company' => 'required',
            'experience' => 'required',
            'experience_desc' => 'required',
            'why_choose' => 'required',
            'add_why_choose' => 'required',
            'edit_why_choose' => 'required',
            'teams' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_three_group_keyword = ContentThreeGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentThreeGroupKeyword::find($content_three_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_four_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_four_group_keywords',
            'add_team' => 'required',
            'edit_team' => 'required',
            'faqs' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'add_faq' => 'required',
            'edit_faq' => 'required',
            'galleries' => 'required',
            'add_gallery' => 'required',
            'edit_gallery' => 'required',
            'pages' => 'required',
            'add_page' => 'required',
            'edit_page' => 'required',
            'display_footer_menu' => 'required',
            'other' => 'required',
            'yes' => 'required',
            'no' => 'required',
            'copy_link' => 'required',
            'copied_text' => 'required',
            'map_iframe' => 'required',
            'map_iframe_desc_placeholder' => 'required',
            'contact' => 'required',
            'contact_info' => 'required',
            'add_contact' => 'required',
            'edit_contact' => 'required',
            'socials' => 'required',
            'add_social' => 'required',
            'edit_social' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'read_status' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentFourGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'add_team' => $input['add_team'],
            'edit_team' => $input['edit_team'],
            'faqs' => $input['faqs'],
            'question' => $input['question'],
            'answer' => $input['answer'],
            'add_faq' => $input['add_faq'],
            'edit_faq' => $input['edit_faq'],
            'galleries' => $input['galleries'],
            'add_gallery' => $input['add_gallery'],
            'edit_gallery' => $input['edit_gallery'],
            'pages' => $input['pages'],
            'add_page' => $input['add_page'],
            'edit_page' => $input['edit_page'],
            'display_footer_menu' => $input['display_footer_menu'],
            'other' => $input['other'],
            'yes' => $input['yes'],
            'no' => $input['no'],
            'copy_link' => $input['copy_link'],
            'copied_text' => $input['copied_text'],
            'map_iframe' => $input['map_iframe'],
            'map_iframe_desc_placeholder' => $input['map_iframe_desc_placeholder'],
            'contact' => $input['contact'],
            'contact_info' => $input['contact_info'],
            'add_contact' => $input['add_contact'],
            'edit_contact' => $input['edit_contact'],
            'socials' => $input['socials'],
            'add_social' => $input['add_social'],
            'edit_social' => $input['edit_social'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
            'read_status' => $input['read_status'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_four_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'add_team' => 'required',
            'edit_team' => 'required',
            'faqs' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'add_faq' => 'required',
            'edit_faq' => 'required',
            'galleries' => 'required',
            'add_gallery' => 'required',
            'edit_gallery' => 'required',
            'pages' => 'required',
            'add_page' => 'required',
            'edit_page' => 'required',
            'display_footer_menu' => 'required',
            'other' => 'required',
            'yes' => 'required',
            'no' => 'required',
            'copy_link' => 'required',
            'copied_text' => 'required',
            'map_iframe' => 'required',
            'map_iframe_desc_placeholder' => 'required',
            'contact' => 'required',
            'contact_info' => 'required',
            'add_contact' => 'required',
            'edit_contact' => 'required',
            'socials' => 'required',
            'add_social' => 'required',
            'edit_social' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'read_status' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_four_group_keyword = ContentFourGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentFourGroupKeyword::find($content_four_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_five_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_five_group_keywords',
            'mark_all_as_read' => 'required',
            'mark' => 'required',
            'messages' => 'required',
            'site_info' => 'required',
            'copyright' => 'required',
            'address' => 'required',
            'address_map_link' => 'required',
            'phone' => 'required',
            'site_images' => 'required',
            'favicon' => 'required',
            'admin_logo' => 'required',
            'admin_small_logo_image' => 'required',
            'site_white_logo_image' => 'required',
            'site_colored_logo_image' => 'required',
            'site_small_logo_image' => 'required',
            'site_footer_logo_image' => 'required',
            'google_analytic' => 'required',
            'breadcrumb' => 'required',
            'sections' => 'required',
            'seo' => 'required',
            'site_name' => 'required',
            'site_desc' => 'required',
            'site_keywords' => 'required',
            'please_create_a_category' => 'required',
            'languages' => 'required',
            'add_language' => 'required',
            'edit_language' => 'required',
            'language_name' => 'required',
            'language_code' => 'required',
            'direction' => 'required',
            'keywords' => 'required',
            'for_admin_panel' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentFiveGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'mark_all_as_read' => $input['mark_all_as_read'],
            'mark' => $input['mark'],
            'messages' => $input['messages'],
            'site_info' => $input['site_info'],
            'copyright' => $input['copyright'],
            'address' => $input['address'],
            'address_map_link' => $input['address_map_link'],
            'phone' => $input['phone'],
            'site_images' => $input['site_images'],
            'favicon' => $input['favicon'],
            'admin_logo' => $input['admin_logo'],
            'admin_small_logo_image' => $input['admin_small_logo_image'],
            'site_white_logo_image' => $input['site_white_logo_image'],
            'site_colored_logo_image' => $input['site_colored_logo_image'],
            'site_small_logo_image' => $input['site_small_logo_image'],
            'site_footer_logo_image' => $input['site_footer_logo_image'],
            'google_analytic' => $input['google_analytic'],
            'breadcrumb' => $input['breadcrumb'],
            'sections' => $input['sections'],
            'seo' => $input['seo'],
            'site_name' => $input['site_name'],
            'site_desc' => $input['site_desc'],
            'site_keywords' => $input['site_keywords'],
            'please_create_a_category' => $input['please_create_a_category'],
            'languages' => $input['languages'],
            'add_language' => $input['add_language'],
            'edit_language' => $input['edit_language'],
            'language_name' => $input['language_name'],
            'language_code' => $input['language_code'],
            'direction' => $input['direction'],
            'keywords' => $input['keywords'],
            'for_admin_panel' => $input['for_admin_panel'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_five_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'mark_all_as_read' => 'required',
            'mark' => 'required',
            'messages' => 'required',
            'site_info' => 'required',
            'copyright' => 'required',
            'address' => 'required',
            'address_map_link' => 'required',
            'phone' => 'required',
            'site_images' => 'required',
            'favicon' => 'required',
            'admin_logo' => 'required',
            'admin_small_logo_image' => 'required',
            'site_white_logo_image' => 'required',
            'site_colored_logo_image' => 'required',
            'site_small_logo_image' => 'required',
            'site_footer_logo_image' => 'required',
            'google_analytic' => 'required',
            'breadcrumb' => 'required',
            'sections' => 'required',
            'seo' => 'required',
            'site_name' => 'required',
            'site_desc' => 'required',
            'site_keywords' => 'required',
            'please_create_a_category' => 'required',
            'languages' => 'required',
            'add_language' => 'required',
            'edit_language' => 'required',
            'language_name' => 'required',
            'language_code' => 'required',
            'direction' => 'required',
            'keywords' => 'required',
            'for_admin_panel' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_five_group_keyword = ContentFiveGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentFiveGroupKeyword::find($content_five_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_content_six_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:content_six_group_keywords',
            'for_frontend' => 'required',
            'content_group' => 'required',
            'hide' => 'required',
            'show' => 'required',
            'display_dropdown' => 'required',
            'default_site_language' => 'required',
            'please_try_again' => 'required',
            'you_are_not_authorized' => 'required',
            'comment' => 'required',
            'comments' => 'required',
            'approval_status' => 'required',
            'mark_all_as_approval' => 'required',
            'read' => 'required',
            'unread' => 'required',
            'profile' => 'required',
            'change_password' => 'required',
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
            'pending_approval' => 'required',
            'approval' => 'required',
            'data_language' => 'required',
            'which_language' => 'required',
            'reminding' => 'required',
            'notifications' => 'required',
            'logout' => 'required',
            'optimizer' => 'required',
            'settings' => 'required',
            'add_testimonial' => 'required',
            'add_work_item' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        ContentSixGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'for_frontend' => $input['for_frontend'],
            'content_group' => $input['content_group'],
            'hide' => $input['hide'],
            'show' => $input['show'],
            'display_dropdown' => $input['display_dropdown'],
            'default_site_language' => $input['default_site_language'],
            'please_try_again' => $input['please_try_again'],
            'you_are_not_authorized' => $input['you_are_not_authorized'],
            'comment' => $input['comment'],
            'comments' => $input['comments'],
            'approval_status' => $input['approval_status'],
            'mark_all_as_approval' => $input['mark_all_as_approval'],
            'read' => $input['read'],
            'unread' => $input['unread'],
            'profile' => $input['profile'],
            'change_password' => $input['change_password'],
            'current_password' => $input['current_password'],
            'new_password' => $input['new_password'],
            'confirm_password' => $input['confirm_password'],
            'pending_approval' => $input['pending_approval'],
            'approval' => $input['approval'],
            'data_language' => $input['data_language'],
            'which_language' => $input['which_language'],
            'reminding' => $input['reminding'],
            'notifications' => $input['notifications'],
            'logout' => $input['logout'],
            'optimizer' => $input['optimizer'],
            'settings' => $input['settings'],
            'add_testimonial' => $input['add_testimonial'],
            'add_work_item' => $input['add_work_item'],
        ]);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_content_six_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'for_frontend' => 'required',
            'content_group' => 'required',
            'hide' => 'required',
            'show' => 'required',
            'display_dropdown' => 'required',
            'default_site_language' => 'required',
            'please_try_again' => 'required',
            'you_are_not_authorized' => 'required',
            'comment' => 'required',
            'comments' => 'required',
            'approval_status' => 'required',
            'mark_all_as_approval' => 'required',
            'read' => 'required',
            'unread' => 'required',
            'profile' => 'required',
            'change_password' => 'required',
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
            'pending_approval' => 'required',
            'approval' => 'required',
            'data_language' => 'required',
            'which_language' => 'required',
            'reminding' => 'required',
            'notifications' => 'required',
            'logout' => 'required',
            'optimizer' => 'required',
            'settings' => 'required',
            'add_testimonial' => 'required',
            'add_work_item' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $content_six_group_keyword = ContentSixGroupKeyword::where('language_id', $id)->first();

        // Update to database
        ContentSixGroupKeyword::find($content_six_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-adminpanel.create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_frontend_one_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:frontend_one_group_keywords',
            'home' => 'required',
            'company' => 'required',
            'about_company' => 'required',
            'meet_our_team' => 'required',
            'contact_us' => 'required',
            'works' => 'required',
            'blogs' => 'required',
            'pages' => 'required',
            'gallery' => 'required',
            'team' => 'required',
            'faqs' => 'required',
            'start_your_project_today' => 'required',
            'search' => 'required',
            'search_here' => 'required',
            'search_now' => 'required',
            'close' => 'required',
            'get_in_touch' => 'required',
            'send_your_review' => 'required',
            'contact_info' => 'required',
            'useful_links' => 'required',
            'office_location' => 'required',
            'quick_contact' => 'required',
            'your_message_has_been_delivered' => 'required',
            'your_comment_is_pending_approval' => 'required',
            'updating' => 'required',
            'all' => 'required',
            'by_admin' => 'required',
            'comments' => 'required',
            'search_results' => 'required',
            'nothing_found' => 'required',
            'keyword' => 'required',
            'popular_post' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        FrontendOneGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'home' => $input['home'],
            'company' => $input['company'],
            'about_company' => $input['about_company'],
            'meet_our_team' => $input['meet_our_team'],
            'contact_us' => $input['contact_us'],
            'works' => $input['works'],
            'blogs' => $input['blogs'],
            'pages' => $input['pages'],
            'gallery' => $input['gallery'],
            'team' => $input['team'],
            'faqs' => $input['faqs'],
            'start_your_project_today' => $input['start_your_project_today'],
            'search' => $input['search'],
            'search_here' => $input['search_here'],
            'search_now' => $input['search_now'],
            'close' => $input['close'],
            'get_in_touch' => $input['get_in_touch'],
            'send_your_review' => $input['send_your_review'],
            'contact_info' => $input['contact_info'],
            'useful_links' => $input['useful_links'],
            'office_location' => $input['office_location'],
            'quick_contact' => $input['quick_contact'],
            'your_message_has_been_delivered' => $input['your_message_has_been_delivered'],
            'your_comment_is_pending_approval' => $input['your_comment_is_pending_approval'],
            'updating' => $input['updating'],
            'all' => $input['all'],
            'by_admin' => $input['by_admin'],
            'comments' => $input['comments'],
            'search_results' => $input['search_results'],
            'nothing_found' => $input['nothing_found'],
            'keyword' => $input['keyword'],
            'popular_post' => $input['popular_post'],
        ]);

        return redirect()->route('language-keyword-for-frontend.frontend_create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_frontend_one_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'home' => 'required',
            'company' => 'required',
            'about_company' => 'required',
            'meet_our_team' => 'required',
            'contact_us' => 'required',
            'works' => 'required',
            'blogs' => 'required',
            'pages' => 'required',
            'gallery' => 'required',
            'team' => 'required',
            'faqs' => 'required',
            'start_your_project_today' => 'required',
            'search' => 'required',
            'search_here' => 'required',
            'search_now' => 'required',
            'close' => 'required',
            'get_in_touch' => 'required',
            'send_your_review' => 'required',
            'contact_info' => 'required',
            'useful_links' => 'required',
            'office_location' => 'required',
            'quick_contact' => 'required',
            'your_message_has_been_delivered' => 'required',
            'your_comment_is_pending_approval' => 'required',
            'updating' => 'required',
            'all' => 'required',
            'by_admin' => 'required',
            'comments' => 'required',
            'search_results' => 'required',
            'nothing_found' => 'required',
            'keyword' => 'required',
            'popular_post' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $frontend_one_group_keyword = FrontendOneGroupKeyword::where('language_id', $id)->first();

        // Update to database
        FrontendOneGroupKeyword::find($frontend_one_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-frontend.frontend_create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_frontend_two_group_keyword(Request $request)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|unique:frontend_two_group_keywords',
            'tags' => 'required',
            'leave_a_reply' => 'required',
            'name' => 'required',
            'email' => 'required',
            'your_comment' => 'required',
            'post_comments' => 'required',
            'categories' => 'required',
            'your_name' => 'required',
            'enter_name_here' => 'required',
            'email_address' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'message_goes_here' => 'required',
            'send_your_message' => 'required',
            'read_more' => 'required',
            'meet_all_members' => 'required',
            'author' => 'required',
            'posted_on' => 'required',
            'posted_comments' => 'required',
            'prev_post' => 'required',
            'next_post' => 'required',
            'contact' => 'required',
            'frequently_asked_questions' => 'required',
            'processing_system' => 'required',
            'step' => 'required',
            'results' => 'required',
            'prev_work' => 'required',
            'next_work' => 'required',
            'all_case_studies' => 'required',
            'view' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        // Record to database
        FrontendTwoGroupKeyword::firstOrCreate([
            'language_id' => $input['language_id'],
            'tags' => $input['tags'],
            'leave_a_reply' => $input['leave_a_reply'],
            'name' => $input['name'],
            'email' => $input['email'],
            'your_comment' => $input['your_comment'],
            'post_comments' => $input['post_comments'],
            'categories' => $input['categories'],
            'your_name' => $input['your_name'],
            'enter_name_here' => $input['enter_name_here'],
            'email_address' => $input['email_address'],
            'subject' => $input['subject'],
            'message' => $input['message'],
            'message_goes_here' => $input['message_goes_here'],
            'send_your_message' => $input['send_your_message'],
            'read_more' => $input['read_more'],
            'meet_all_members' => $input['meet_all_members'],
            'author' => $input['author'],
            'posted_on' => $input['posted_on'],
            'posted_comments' => $input['posted_comments'],
            'prev_post' => $input['prev_post'],
            'next_post' => $input['next_post'],
            'contact' => $input['contact'],
            'frequently_asked_questions' => $input['frequently_asked_questions'],
            'processing_system' => $input['processing_system'],
            'step' => $input['step'],
            'results' => $input['results'],
            'prev_work' => $input['prev_work'],
            'next_work' => $input['next_work'],
            'all_case_studies' => $input['all_case_studies'],
            'view' => $input['view'],
        ]);

        return redirect()->route('language-keyword-for-frontend.frontend_create', $input['language_id'])
            ->with('success', 'content.created_successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_frontend_two_group_keyword(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'language_id' => 'required|integer',
            'tags' => 'required',
            'leave_a_reply' => 'required',
            'name' => 'required',
            'email' => 'required',
            'your_comment' => 'required',
            'post_comments' => 'required',
            'categories' => 'required',
            'your_name' => 'required',
            'enter_name_here' => 'required',
            'email_address' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'message_goes_here' => 'required',
            'send_your_message' => 'required',
            'read_more' => 'required',
            'meet_all_members' => 'required',
            'author' => 'required',
            'posted_on' => 'required',
            'posted_comments' => 'required',
            'prev_post' => 'required',
            'next_post' => 'required',
            'contact' => 'required',
            'frequently_asked_questions' => 'required',
            'processing_system' => 'required',
            'step' => 'required',
            'results' => 'required',
            'prev_work' => 'required',
            'next_work' => 'required',
            'all_case_studies' => 'required',
            'view' => 'required',
        ]);

        // Get All Request
        $input = $request->all();

        $frontend_two_group_keyword = FrontendTwoGroupKeyword::where('language_id', $id)->first();

        // Update to database
        FrontendTwoGroupKeyword::find($frontend_two_group_keyword->id)->update($input);

        return redirect()->route('language-keyword-for-frontend.frontend_create', $input['language_id'])
            ->with('success', 'content.updated_successfully');
    }

}
