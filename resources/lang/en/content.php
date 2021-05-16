<?php

use App\Models\Admin\ContentFiveGroupKeyword;
use App\Models\Admin\ContentFourGroupKeyword;
use App\Models\Admin\ContentOneGroupKeyword;
use App\Models\Admin\ContentSixGroupKeyword;
use App\Models\Admin\ContentThreeGroupKeyword;
use App\Models\Admin\ContentTwoGroupKeyword;
use App\Models\Admin\Language;
use Illuminate\Support\Facades\Schema;

$content_one_group_columns = Schema::getColumnListing('content_one_group_keywords');
$content_two_group_columns = Schema::getColumnListing('content_two_group_keywords');
$content_three_group_columns = Schema::getColumnListing('content_three_group_keywords');
$content_four_group_columns = Schema::getColumnListing('content_four_group_keywords');
$content_five_group_columns = Schema::getColumnListing('content_five_group_keywords');
$content_six_group_columns = Schema::getColumnListing('content_six_group_keywords');


if (session()->has('language_id_from_dropdown')) {

    $language_id_from_dropdown = session()->get('language_id_from_dropdown');

    $language_content_one_group_keyword = ContentOneGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_content_two_group_keyword = ContentTwoGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_content_three_group_keyword = ContentThreeGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_content_four_group_keyword = ContentFourGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_content_five_group_keyword = ContentFiveGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_content_six_group_keyword = ContentSixGroupKeyword::where('language_id', $language_id_from_dropdown)->first();

} else {

    $language = Language::where('default_site_language', 1)->first();

    $language_content_one_group_keyword = ContentOneGroupKeyword::where('language_id', $language->id)->first();
    $language_content_two_group_keyword = ContentTwoGroupKeyword::where('language_id', $language->id)->first();
    $language_content_three_group_keyword = ContentThreeGroupKeyword::where('language_id', $language->id)->first();
    $language_content_four_group_keyword = ContentFourGroupKeyword::where('language_id', $language->id)->first();
    $language_content_five_group_keyword = ContentFiveGroupKeyword::where('language_id', $language->id)->first();
    $language_content_six_group_keyword = ContentSixGroupKeyword::where('language_id', $language->id)->first();

}

if (isset($language_content_one_group_keyword) && isset($language_content_two_group_keyword)  &&
   isset($language_content_three_group_keyword) && isset($language_content_four_group_keyword) &&
   isset($language_content_five_group_keyword) && isset($language_content_six_group_keyword)) {

    return [

        /*
        |--------------------------------------------------------------------------
        | Pagination Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines are used by the paginator library to build
        | the simple pagination links. You are free to change them to anything
        | you want to customize your views to better match your application.
        |
        */

        /* Content Group 1 */
        $content_one_group_columns[2] => $language_content_one_group_keyword->dashboard,
        $content_one_group_columns[3] => $language_content_one_group_keyword->home,
        $content_one_group_columns[4] => $language_content_one_group_keyword->fixed_content,
        $content_one_group_columns[5] => $language_content_one_group_keyword->title,
        $content_one_group_columns[6] => $language_content_one_group_keyword->desc,
        $content_one_group_columns[7] => $language_content_one_group_keyword->btn_name,
        $content_one_group_columns[8] => $language_content_one_group_keyword->btn_link,
        $content_one_group_columns[9] => $language_content_one_group_keyword->submit,
        $content_one_group_columns[10] => $language_content_one_group_keyword->solutions,
        $content_one_group_columns[11] => $language_content_one_group_keyword->section_title_and_desc,
        $content_one_group_columns[12] => $language_content_one_group_keyword->top_title,
        $content_one_group_columns[13] => $language_content_one_group_keyword->add_solution,
        $content_one_group_columns[14] => $language_content_one_group_keyword->add_new,
        $content_one_group_columns[15] => $language_content_one_group_keyword->icon,
        $content_one_group_columns[16] => $language_content_one_group_keyword->order,
        $content_one_group_columns[17] => $language_content_one_group_keyword->action,
        $content_one_group_columns[18] => $language_content_one_group_keyword->edit_solution,
        $content_one_group_columns[19] => $language_content_one_group_keyword->about,
        $content_one_group_columns[20] => $language_content_one_group_keyword->video_link,
        $content_one_group_columns[21] => $language_content_one_group_keyword->image,
        $content_one_group_columns[22] => $language_content_one_group_keyword->size,
        $content_one_group_columns[23] => $language_content_one_group_keyword->recommended_size,
        $content_one_group_columns[24] => $language_content_one_group_keyword->created_successfully,
        $content_one_group_columns[25] => $language_content_one_group_keyword->updated_successfully,
        $content_one_group_columns[26] => $language_content_one_group_keyword->deleted_successfully,
        $content_one_group_columns[27] => $language_content_one_group_keyword->current_image,
        $content_one_group_columns[28] => $language_content_one_group_keyword->not_yet_created,
        $content_one_group_columns[29] => $language_content_one_group_keyword->delete,
        $content_one_group_columns[30] => $language_content_one_group_keyword->close,
        $content_one_group_columns[31] => $language_content_one_group_keyword->you_wont_be_able_to_revert_this,
        $content_one_group_columns[32] => $language_content_one_group_keyword->cancel,
        $content_one_group_columns[33] => $language_content_one_group_keyword->yes_delete_it,


        /* Content Group 2 */
        $content_two_group_columns[2] => $language_content_two_group_keyword->add_about,
        $content_two_group_columns[3] => $language_content_two_group_keyword->tab_name,
        $content_two_group_columns[4] => $language_content_two_group_keyword->edit_about,
        $content_two_group_columns[5] => $language_content_two_group_keyword->work_process,
        $content_two_group_columns[6] => $language_content_two_group_keyword->add_work_process,
        $content_two_group_columns[7] => $language_content_two_group_keyword->edit_work_process,
        $content_two_group_columns[8] => $language_content_two_group_keyword->industries,
        $content_two_group_columns[9] => $language_content_two_group_keyword->add_industry,
        $content_two_group_columns[10] => $language_content_two_group_keyword->link,
        $content_two_group_columns[11] => $language_content_two_group_keyword->edit_industry,
        $content_two_group_columns[12] => $language_content_two_group_keyword->skills,
        $content_two_group_columns[13] => $language_content_two_group_keyword->add_skill,
        $content_two_group_columns[14] => $language_content_two_group_keyword->percent_rate,
        $content_two_group_columns[15] => $language_content_two_group_keyword->edit_skill,
        $content_two_group_columns[16] => $language_content_two_group_keyword->testimonials,
        $content_two_group_columns[17] => $language_content_two_group_keyword->name,
        $content_two_group_columns[18] => $language_content_two_group_keyword->job,
        $content_two_group_columns[19] => $language_content_two_group_keyword->star,
        $content_two_group_columns[20] => $language_content_two_group_keyword->select_your_option,
        $content_two_group_columns[21] => $language_content_two_group_keyword->enable,
        $content_two_group_columns[22] => $language_content_two_group_keyword->disable,
        $content_two_group_columns[23] => $language_content_two_group_keyword->edit_testimonial,
        $content_two_group_columns[24] => $language_content_two_group_keyword->counters,
        $content_two_group_columns[25] => $language_content_two_group_keyword->add_counter,
        $content_two_group_columns[26] => $language_content_two_group_keyword->timer,
        $content_two_group_columns[27] => $language_content_two_group_keyword->edit_counter,
        $content_two_group_columns[28] => $language_content_two_group_keyword->sponsors,
        $content_two_group_columns[29] => $language_content_two_group_keyword->add_sponsor,
        $content_two_group_columns[30] => $language_content_two_group_keyword->edit_sponsor,
        $content_two_group_columns[31] => $language_content_two_group_keyword->blogs,
        $content_two_group_columns[32] => $language_content_two_group_keyword->categories,
        $content_two_group_columns[33] => $language_content_two_group_keyword->add_category,

        /* Content Group 3 */
        $content_three_group_columns[2] => $language_content_three_group_keyword->edit_category,
        $content_three_group_columns[3] => $language_content_three_group_keyword->category_name,
        $content_three_group_columns[4] => $language_content_three_group_keyword->status,
        $content_three_group_columns[5] => $language_content_three_group_keyword->add_blog,
        $content_three_group_columns[6] => $language_content_three_group_keyword->edit_blog,
        $content_three_group_columns[7] => $language_content_three_group_keyword->short_desc,
        $content_three_group_columns[8] => $language_content_three_group_keyword->tag,
        $content_three_group_columns[9] => $language_content_three_group_keyword->separate_with_commas,
        $content_three_group_columns[10] => $language_content_three_group_keyword->author,
        $content_three_group_columns[11] => $language_content_three_group_keyword->category,
        $content_three_group_columns[12] => $language_content_three_group_keyword->post_date,
        $content_three_group_columns[13] => $language_content_three_group_keyword->view,
        $content_three_group_columns[14] => $language_content_three_group_keyword->works,
        $content_three_group_columns[15] => $language_content_three_group_keyword->add_work,
        $content_three_group_columns[16] => $language_content_three_group_keyword->results,
        $content_three_group_columns[17] => $language_content_three_group_keyword->optional_features,
        $content_three_group_columns[18] => $language_content_three_group_keyword->items,
        $content_three_group_columns[19] => $language_content_three_group_keyword->steps,
        $content_three_group_columns[20] => $language_content_three_group_keyword->edit_work,
        $content_three_group_columns[21] => $language_content_three_group_keyword->work_items,
        $content_three_group_columns[22] => $language_content_three_group_keyword->edit_work_item,
        $content_three_group_columns[23] => $language_content_three_group_keyword->work_steps,
        $content_three_group_columns[24] => $language_content_three_group_keyword->add_work_step,
        $content_three_group_columns[25] => $language_content_three_group_keyword->edit_work_step,
        $content_three_group_columns[26] => $language_content_three_group_keyword->company,
        $content_three_group_columns[27] => $language_content_three_group_keyword->about_company,
        $content_three_group_columns[28] => $language_content_three_group_keyword->experience,
        $content_three_group_columns[29] => $language_content_three_group_keyword->experience_desc,
        $content_three_group_columns[30] => $language_content_three_group_keyword->why_choose,
        $content_three_group_columns[31] => $language_content_three_group_keyword->add_why_choose,
        $content_three_group_columns[32] => $language_content_three_group_keyword->edit_why_choose,
        $content_three_group_columns[33] => $language_content_three_group_keyword->teams,

        /* Content Group 4 */
        $content_four_group_columns[2] => $language_content_four_group_keyword->add_team,
        $content_four_group_columns[3] => $language_content_four_group_keyword->edit_team,
        $content_four_group_columns[4] => $language_content_four_group_keyword->faqs,
        $content_four_group_columns[5] => $language_content_four_group_keyword->question,
        $content_four_group_columns[6] => $language_content_four_group_keyword->answer,
        $content_four_group_columns[7] => $language_content_four_group_keyword->add_faq,
        $content_four_group_columns[8] => $language_content_four_group_keyword->edit_faq,
        $content_four_group_columns[9] => $language_content_four_group_keyword->galleries,
        $content_four_group_columns[10] => $language_content_four_group_keyword->add_gallery,
        $content_four_group_columns[11] => $language_content_four_group_keyword->edit_gallery,
        $content_four_group_columns[12] => $language_content_four_group_keyword->pages,
        $content_four_group_columns[13] => $language_content_four_group_keyword->add_page,
        $content_four_group_columns[14] => $language_content_four_group_keyword->edit_page,
        $content_four_group_columns[15] => $language_content_four_group_keyword->display_footer_menu,
        $content_four_group_columns[16] => $language_content_four_group_keyword->other,
        $content_four_group_columns[17] => $language_content_four_group_keyword->yes,
        $content_four_group_columns[18] => $language_content_four_group_keyword->no,
        $content_four_group_columns[19] => $language_content_four_group_keyword->copy_link,
        $content_four_group_columns[20] => $language_content_four_group_keyword->copied_text,
        $content_four_group_columns[21] => $language_content_four_group_keyword->map_iframe,
        $content_four_group_columns[22] => $language_content_four_group_keyword->map_iframe_desc_placeholder,
        $content_four_group_columns[23] => $language_content_four_group_keyword->contact,
        $content_four_group_columns[24] => $language_content_four_group_keyword->contact_info,
        $content_four_group_columns[25] => $language_content_four_group_keyword->add_contact,
        $content_four_group_columns[26] => $language_content_four_group_keyword->edit_contact,
        $content_four_group_columns[27] => $language_content_four_group_keyword->socials,
        $content_four_group_columns[28] => $language_content_four_group_keyword->add_social,
        $content_four_group_columns[29] => $language_content_four_group_keyword->edit_social,
        $content_four_group_columns[30] => $language_content_four_group_keyword->email,
        $content_four_group_columns[31] => $language_content_four_group_keyword->subject,
        $content_four_group_columns[32] => $language_content_four_group_keyword->message,
        $content_four_group_columns[33] => $language_content_four_group_keyword->read_status,

        /* Content Group 5 */
        $content_five_group_columns[2] => $language_content_five_group_keyword->mark_all_as_read,
        $content_five_group_columns[3] => $language_content_five_group_keyword->mark,
        $content_five_group_columns[4] => $language_content_five_group_keyword->messages,
        $content_five_group_columns[5] => $language_content_five_group_keyword->site_info,
        $content_five_group_columns[6] => $language_content_five_group_keyword->copyright,
        $content_five_group_columns[7] => $language_content_five_group_keyword->address,
        $content_five_group_columns[8] => $language_content_five_group_keyword->address_map_link,
        $content_five_group_columns[9] => $language_content_five_group_keyword->phone,
        $content_five_group_columns[10] => $language_content_five_group_keyword->site_images,
        $content_five_group_columns[11] => $language_content_five_group_keyword->favicon,
        $content_five_group_columns[12] => $language_content_five_group_keyword->admin_logo,
        $content_five_group_columns[13] => $language_content_five_group_keyword->admin_small_logo_image,
        $content_five_group_columns[14] => $language_content_five_group_keyword->site_white_logo_image,
        $content_five_group_columns[15] => $language_content_five_group_keyword->site_colored_logo_image,
        $content_five_group_columns[16] => $language_content_five_group_keyword->site_small_logo_image,
        $content_five_group_columns[17] => $language_content_five_group_keyword->site_footer_logo_image,
        $content_five_group_columns[18] => $language_content_five_group_keyword->google_analytic,
        $content_five_group_columns[19] => $language_content_five_group_keyword->breadcrumb,
        $content_five_group_columns[20] => $language_content_five_group_keyword->sections,
        $content_five_group_columns[21] => $language_content_five_group_keyword->seo,
        $content_five_group_columns[22] => $language_content_five_group_keyword->site_name,
        $content_five_group_columns[23] => $language_content_five_group_keyword->site_desc,
        $content_five_group_columns[24] => $language_content_five_group_keyword->site_keywords,
        $content_five_group_columns[25] => $language_content_five_group_keyword->please_create_a_category,
        $content_five_group_columns[26] => $language_content_five_group_keyword->languages,
        $content_five_group_columns[27] => $language_content_five_group_keyword->add_language,
        $content_five_group_columns[28] => $language_content_five_group_keyword->edit_language,
        $content_five_group_columns[29] => $language_content_five_group_keyword->language_name,
        $content_five_group_columns[30] => $language_content_five_group_keyword->language_code,
        $content_five_group_columns[31] => $language_content_five_group_keyword->direction,
        $content_five_group_columns[32] => $language_content_five_group_keyword->keywords,
        $content_five_group_columns[33] => $language_content_five_group_keyword->for_admin_panel,

        /* Content Group 6 */
        $content_six_group_columns[2] => $language_content_six_group_keyword->for_frontend,
        $content_six_group_columns[3] => $language_content_six_group_keyword->content_group,
        $content_six_group_columns[4] => $language_content_six_group_keyword->hide,
        $content_six_group_columns[5] => $language_content_six_group_keyword->show,
        $content_six_group_columns[6] => $language_content_six_group_keyword->display_dropdown,
        $content_six_group_columns[7] => $language_content_six_group_keyword->default_site_language,
        $content_six_group_columns[8] => $language_content_six_group_keyword->please_try_again,
        $content_six_group_columns[9] => $language_content_six_group_keyword->you_are_not_authorized,
        $content_six_group_columns[10] => $language_content_six_group_keyword->comment,
        $content_six_group_columns[11] => $language_content_six_group_keyword->comments,
        $content_six_group_columns[12] => $language_content_six_group_keyword->approval_status,
        $content_six_group_columns[13] => $language_content_six_group_keyword->mark_all_as_approval,
        $content_six_group_columns[14] => $language_content_six_group_keyword->read,
        $content_six_group_columns[15] => $language_content_six_group_keyword->unread,
        $content_six_group_columns[16] => $language_content_six_group_keyword->profile,
        $content_six_group_columns[17] => $language_content_six_group_keyword->change_password,
        $content_six_group_columns[18] => $language_content_six_group_keyword->current_password,
        $content_six_group_columns[19] => $language_content_six_group_keyword->new_password,
        $content_six_group_columns[20] => $language_content_six_group_keyword->confirm_password,
        $content_six_group_columns[21] => $language_content_six_group_keyword->pending_approval,
        $content_six_group_columns[22] => $language_content_six_group_keyword->approval,
        $content_six_group_columns[23] => $language_content_six_group_keyword->data_language,
        $content_six_group_columns[24] => $language_content_six_group_keyword->which_language,
        $content_six_group_columns[25] => $language_content_six_group_keyword->reminding,
        $content_six_group_columns[26] => $language_content_six_group_keyword->notifications,
        $content_six_group_columns[27] => $language_content_six_group_keyword->logout,
        $content_six_group_columns[28] => $language_content_six_group_keyword->optimizer,
        $content_six_group_columns[29] => $language_content_six_group_keyword->settings,
        $content_six_group_columns[30] => $language_content_six_group_keyword->add_testimonial,
        $content_six_group_columns[31] => $language_content_six_group_keyword->add_work_item,

    ];

} else {

    return [

        /*
        |--------------------------------------------------------------------------
        | Pagination Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines are used by the paginator library to build
        | the simple pagination links. You are free to change them to anything
        | you want to customize your views to better match your application.
        |
        */

        /* Content Group 1 */
        'dashboard' => 'Dashboard',
        'home' => 'Home',
        'fixed_content' => 'Fixed Content',
        'title' => 'Title',
        'desc' => 'Description',
        'btn_name' => 'Button Name',
        'btn_link' => 'Button Link',
        'submit' => 'Submit',
        'solutions' => 'Solutions',
        'section_title_and_desc' => 'Section Title/Description',
        'top_title' => 'Top Title',
        'add_solution' => 'Add Solution',
        'add_new' => 'Add New',
        'icon' => 'Icon',
        'order' => 'Order',
        'action' => 'Action',
        'edit_solution' => 'Edit Solution',
        'about' => 'About',
        'video_link' => 'Video Link',
        'image' => 'Image',
        'size' => 'size',
        'recommended_size' => 'You do not have to use the recommended sizes. However, please use the recommended sizes for your site design to look its best.',
        'created_successfully' => 'Created Successfully.',
        'updated_successfully' => 'Updated Successfully.',
        'deleted_successfully' => 'Deleted Successfully.',
        'current_image' => 'Current Image',
        'not_yet_created' => 'Not yet created.',
        'delete' => 'Delete',
        'close' => 'Close',
        'you_wont_be_able_to_revert_this' => 'You wont be able to revert this!',
        'cancel' => 'Cancel',
        'yes_delete_it' => 'Yes, delete it!',

        /* Content Group 2 */
        'add_about' => 'Add About',
        'tab_name' => 'Tab Name',
        'edit_about' => 'Edit About',
        'work_process' => 'Work Process',
        'add_work_process' => 'Add Work Process',
        'edit_work_process' => 'Edit Work Process',
        'industries' => 'Industries',
        'add_industry' => 'Add Industry',
        'link' => 'Link',
        'edit_industry' => 'Edit Industry',
        'skills' => 'Skills',
        'add_skill' => 'Add Skill',
        'percent_rate' => 'Percent Rate',
        'edit_skill' => 'Edit Skill',
        'testimonials' => 'Testimonials',
        'name' => 'Name',
        'job' => 'Job',
        'star' => 'Star',
        'select_your_option' => 'Select Your Option',
        'enable' => 'Enable',
        'disable' => 'Disable',
        'edit_testimonial' => 'Edit Testimonial',
        'counters' => 'Counters',
        'add_counter' => 'Add Counter',
        'timer' => 'Timer',
        'edit_counter' => 'Edit Counter',
        'sponsors' => 'Sponsors',
        'add_sponsor' => 'Add Sponsor',
        'edit_sponsor' => 'Edit Sponsor',
        'blogs' => 'Blogs',
        'categories' => 'Categories',
        'add_category' => 'Add Category',

        /* Content Group 3 */
        'edit_category' => 'Edit Category',
        'category_name' => 'Category Name',
        'status' => 'Status',
        'add_blog' => 'Add Blog',
        'edit_blog' => 'Edit Blog',
        'short_desc' => 'Short Description',
        'tag' => 'Tag',
        'separate_with_commas' => 'Separate with commas',
        'author' => 'Author',
        'category' => 'Category',
        'post_date' => 'Post Date',
        'view' => 'View',
        'works' => 'Works',
        'add_work' => 'Add Work',
        'results' => 'Results',
        'optional_features' => 'Optional Features',
        'items' => 'Items',
        'steps' => 'Steps',
        'edit_work' => 'Edit Work',
        'work_items' => 'Work Items',
        'edit_work_item' => 'Edit Work Item',
        'work_steps' => 'Work Steps',
        'add_work_step' => 'Add Work Step',
        'edit_work_step' => 'Edit Work Step',
        'company' => 'Company',
        'about_company' => 'About Company',
        'experience' => 'Experience',
        'experience_desc' => 'Experience Description',
        'why_choose' => 'Why Choose',
        'add_why_choose' => 'Add Why Choose',
        'edit_why_choose' => 'Edit Why Choose',
        'teams' => 'Teams',

        /* Content Group 4 */
        'add_team' => 'Add Team',
        'edit_team' => 'Edit Team',
        'faqs' => 'Faqs',
        'question' => 'Question',
        'answer' => 'Answer',
        'add_faq' => 'Add Faq',
        'edit_faq' => 'Edit Faq',
        'galleries' => 'Galleries',
        'add_gallery' => 'Add Gallery',
        'edit_gallery' => 'Edit Gallery',
        'pages' => 'Pages',
        'add_page' => 'Add Page',
        'edit_page' => 'Edit Page',
        'display_footer_menu' => 'Display Footer Menu?',
        'other' => 'Other',
        'yes' => 'Yes',
        'no' => 'No',
        'copy_link' => 'Copy Link',
        'copied_text' => 'Copied Text:',
        'map_iframe' => 'Map Iframe (link in src)',
        'map_iframe_desc_placeholder' => 'Please find your address on Google Map. And click the Share Button on the Left Side. You will see the Map Placement Area. In the Copy Html field in this section Copy and paste the link in the src from the code inside.',
        'contact' => 'Contact',
        'contact_info' => 'Contact Info',
        'add_contact' => 'Add Contact',
        'edit_contact' => 'Edit Contact',
        'socials' => 'Socials',
        'add_social' => 'Add Social',
        'edit_social' => 'Edit Social',
        'email' => 'Email',
        'subject' => 'Subject',
        'message' => 'Message',
        'read_status' => 'Read Status',

        /* Content Group 5 */
        'mark_all_as_read' => 'Mark All As Read',
        'mark' => 'Mark',
        'messages' => 'Messages',
        'site_info' => 'Site Info',
        'copyright' => 'Copyright',
        'address' => 'Address',
        'address_map_link' => 'Address Map Link',
        'phone' => 'Phone',
        'site_images' => 'Site Images',
        'favicon' => 'Favicon',
        'admin_logo' => 'Admin Logo',
        'admin_small_logo_image' => 'Admin Small Logo',
        'site_white_logo_image' => 'Site White Logo',
        'site_colored_logo_image' => 'Site Colored Logo',
        'site_small_logo_image' => 'Site Small Logo',
        'site_footer_logo_image' => 'Site Footer Logo',
        'google_analytic' => 'Google Analytic',
        'breadcrumb' => 'Breadcrumb',
        'sections' => 'Sections',
        'seo' => 'Seo',
        'site_name' => 'Site Name',
        'site_desc' => 'Site Description',
        'site_keywords' => 'Site Keywords',
        'please_create_a_category' => 'Please create a category.',
        'languages' => 'Languages',
        'add_language' => 'Add Language',
        'edit_language' => 'Edit Language',
        'language_name' => 'Language Name',
        'language_code' => 'Language Code',
        'direction' => 'Direction',
        'keywords' => 'Keywords',
        'for_admin_panel' => 'For Admin Panel',

        /* Content Group 6 */
        'for_frontend' => 'For Frontend',
        'content_group' => 'Content Group',
        'hide' => 'Hide',
        'show' => 'Show',
        'display_dropdown' => 'Display Dropdown?',
        'default_site_language' => 'Default Site Language',
        'please_try_again' => 'Please try again!',
        'you_are_not_authorized' => 'You are not authorized to delete this operation.',
        'comment' => 'Comment',
        'comments' => 'Comments',
        'approval_status' => 'Approval Status',
        'mark_all_as_approval' => 'Mark All As Approval',
        'read' => 'Read',
        'unread' => 'Unread',
        'profile' => 'Profile',
        'change_password' => 'Change Password',
        'current_password' => 'Current Password',
        'new_password' => 'New Password',
        'confirm_password' => 'Confirm Password',
        'pending_approval' => 'Pending Approval',
        'approval' => 'Approval',
        'data_language' => 'Data Language',
        'which_language' => 'Which language do you want to create the data?',
        'reminding' => 'Please note that all the entries you create will be based on your chosen language.',
        'notifications' => 'Notifications',
        'logout' => 'Logout',
        'optimizer' => 'Optimizer',
        'settings' => 'Settings',
        'add_testimonial' => 'Add Testimonial',
        'add_work_item' => 'Add Work Item',

    ];

}



