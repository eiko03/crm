<?php


use App\Models\Admin\FrontendOneGroupKeyword;
use App\Models\Admin\FrontendTwoGroupKeyword;
use App\Models\Admin\Language;
use Illuminate\Support\Facades\Schema;

$frontend_one_group_columns = Schema::getColumnListing('frontend_one_group_keywords');
$frontend_two_group_columns = Schema::getColumnListing('frontend_two_group_keywords');


if (session()->has('language_id_from_dropdown')) {

    $language_id_from_dropdown = session()->get('language_id_from_dropdown');

    $language_frontend_one_group_keyword = FrontendOneGroupKeyword::where('language_id', $language_id_from_dropdown)->first();
    $language_frontend_two_group_keyword = FrontendTwoGroupKeyword::where('language_id', $language_id_from_dropdown)->first();


} else {

    $language = Language::where('default_site_language', 1)->first();

    $language_frontend_one_group_keyword = FrontendOneGroupKeyword::where('language_id', $language->id)->first();
    $language_frontend_two_group_keyword = FrontendTwoGroupKeyword::where('language_id', $language->id)->first();

}


if (isset($language_frontend_one_group_keyword) && isset($language_frontend_two_group_keyword)) {

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

        /* Frontend Group 1 */
        $frontend_one_group_columns[2] => $language_frontend_one_group_keyword->home,
        $frontend_one_group_columns[3] => $language_frontend_one_group_keyword->company,
        $frontend_one_group_columns[4] => $language_frontend_one_group_keyword->about_company,
        $frontend_one_group_columns[5] => $language_frontend_one_group_keyword->meet_our_team,
        $frontend_one_group_columns[6] => $language_frontend_one_group_keyword->contact_us,
        $frontend_one_group_columns[7] => $language_frontend_one_group_keyword->works,
        $frontend_one_group_columns[8] => $language_frontend_one_group_keyword->blogs,
        $frontend_one_group_columns[9] => $language_frontend_one_group_keyword->pages,
        $frontend_one_group_columns[10] => $language_frontend_one_group_keyword->gallery,
        $frontend_one_group_columns[11] => $language_frontend_one_group_keyword->team,
        $frontend_one_group_columns[12] => $language_frontend_one_group_keyword->faqs,
        $frontend_one_group_columns[13] => $language_frontend_one_group_keyword->start_your_project_today,
        $frontend_one_group_columns[14] => $language_frontend_one_group_keyword->search,
        $frontend_one_group_columns[15] => $language_frontend_one_group_keyword->search_here,
        $frontend_one_group_columns[16] => $language_frontend_one_group_keyword->search_now,
        $frontend_one_group_columns[17] => $language_frontend_one_group_keyword->close,
        $frontend_one_group_columns[18] => $language_frontend_one_group_keyword->get_in_touch,
        $frontend_one_group_columns[19] => $language_frontend_one_group_keyword->send_your_review,
        $frontend_one_group_columns[20] => $language_frontend_one_group_keyword->contact_info,
        $frontend_one_group_columns[21] => $language_frontend_one_group_keyword->useful_links,
        $frontend_one_group_columns[22] => $language_frontend_one_group_keyword->office_location,
        $frontend_one_group_columns[23] => $language_frontend_one_group_keyword->quick_contact,
        $frontend_one_group_columns[24] => $language_frontend_one_group_keyword->your_message_has_been_delivered,
        $frontend_one_group_columns[25] => $language_frontend_one_group_keyword->your_comment_is_pending_approval,
        $frontend_one_group_columns[26] => $language_frontend_one_group_keyword->updating,
        $frontend_one_group_columns[27] => $language_frontend_one_group_keyword->all,
        $frontend_one_group_columns[28] => $language_frontend_one_group_keyword->by_admin,
        $frontend_one_group_columns[29] => $language_frontend_one_group_keyword->comments,
        $frontend_one_group_columns[30] => $language_frontend_one_group_keyword->search_results,
        $frontend_one_group_columns[31] => $language_frontend_one_group_keyword->nothing_found,
        $frontend_one_group_columns[32] => $language_frontend_one_group_keyword->keyword,
        $frontend_one_group_columns[33] => $language_frontend_one_group_keyword->popular_post,

        /* Frontend Group 2 */
        $frontend_two_group_columns[2] => $language_frontend_two_group_keyword->tags,
        $frontend_two_group_columns[3] => $language_frontend_two_group_keyword->leave_a_reply,
        $frontend_two_group_columns[4] => $language_frontend_two_group_keyword->name,
        $frontend_two_group_columns[5] => $language_frontend_two_group_keyword->email,
        $frontend_two_group_columns[6] => $language_frontend_two_group_keyword->your_comment,
        $frontend_two_group_columns[7] => $language_frontend_two_group_keyword->post_comments,
        $frontend_two_group_columns[8] => $language_frontend_two_group_keyword->categories,
        $frontend_two_group_columns[9] => $language_frontend_two_group_keyword->your_name,
        $frontend_two_group_columns[10] => $language_frontend_two_group_keyword->enter_name_here,
        $frontend_two_group_columns[11] => $language_frontend_two_group_keyword->email_address,
        $frontend_two_group_columns[12] => $language_frontend_two_group_keyword->subject,
        $frontend_two_group_columns[13] => $language_frontend_two_group_keyword->message,
        $frontend_two_group_columns[14] => $language_frontend_two_group_keyword->message_goes_here,
        $frontend_two_group_columns[15] => $language_frontend_two_group_keyword->send_your_message,
        $frontend_two_group_columns[16] => $language_frontend_two_group_keyword->read_more,
        $frontend_two_group_columns[17] => $language_frontend_two_group_keyword->meet_all_members,
        $frontend_two_group_columns[18] => $language_frontend_two_group_keyword->author,
        $frontend_two_group_columns[19] => $language_frontend_two_group_keyword->posted_on,
        $frontend_two_group_columns[20] => $language_frontend_two_group_keyword->posted_comments,
        $frontend_two_group_columns[21] => $language_frontend_two_group_keyword->prev_post,
        $frontend_two_group_columns[22] => $language_frontend_two_group_keyword->next_post,
        $frontend_two_group_columns[23] => $language_frontend_two_group_keyword->contact,
        $frontend_two_group_columns[24] => $language_frontend_two_group_keyword->frequently_asked_questions,
        $frontend_two_group_columns[25] => $language_frontend_two_group_keyword->processing_system,
        $frontend_two_group_columns[26] => $language_frontend_two_group_keyword->step,
        $frontend_two_group_columns[27] => $language_frontend_two_group_keyword->results,
        $frontend_two_group_columns[28] => $language_frontend_two_group_keyword->prev_work,
        $frontend_two_group_columns[29] => $language_frontend_two_group_keyword->next_work,
        $frontend_two_group_columns[30] => $language_frontend_two_group_keyword->all_case_studies,
        $frontend_two_group_columns[31] => $language_frontend_two_group_keyword->view,

    ];

}
else {

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

        // Frontend One Group Keyword
        'home' => 'Home',
        'company' => 'Company',
        'about_company' => 'About Company',
        'meet_our_team' => 'Meet Our Team',
        'contact_us' => 'Contact Us',
        'works' => 'Works',
        'blogs' => 'Blogs',
        'pages' => 'Pages',
        'gallery' => 'Gallery',
        'team' => 'Team',
        'faqs' => 'Faqs',
        'start_your_project_today' => 'Start your project today',
        'search' => 'Search',
        'search_here' => 'Search Here',
        'search_now' => 'Search Now!',
        'close' => 'Close',
        'get_in_touch' => 'Get in Touch',
        'send_your_review' => 'Send Your Review',
        'contact_info' => 'Contact Info',
        'useful_links' => 'Useful Links',
        'office_location' => 'Office Location',
        'quick_contact' => 'Quick Contact',
        'your_message_has_been_delivered' => 'Your message has been delivered.',
        'your_comment_is_pending_approval' => 'Your comment is pending approval.',
        'updating' => 'Updating...',
        'all' => 'All',
        'by_admin' => 'by Admin',
        'comments' => 'Comments',
        'search_results' => 'Search Results',
        'nothing_found' => 'Nothing Found',
        'keyword' => 'Keyword...',
        'popular_post' => 'Popular Post',

        // Frontend Two Group Keyword
        'tags' => 'Tags',
        'leave_a_reply' => 'Leave A Reply',
        'name' => 'Name',
        'email' => 'Email',
        'your_comment' => 'Your Comment...',
        'post_comments' => 'Post Comments',
        'categories' => 'Categories',
        'your_name' => 'Your Name',
        'enter_name_here' => 'Enter Name Here',
        'email_address' => 'Email Address',
        'subject' => 'Subject',
        'message' => 'Message',
        'message_goes_here' => 'Message goes here *',
        'send_your_message' => 'Send Your Message',
        'read_more' => 'Read More',
        'meet_all_members' => 'Meet All Members',
        'author' => 'Author:',
        'posted_on' => 'Posted On:',
        'posted_comments' => 'Post Comments:',
        'prev_post' => 'Prev Post',
        'next_post' => 'Next Post',
        'contact' => 'Contact',
        'frequently_asked_questions' => 'Frequently Asked Questions',
        'processing_system' => 'Processing System',
        'step' => 'Step',
        'results' => 'Results',
        'prev_work' => 'Prev Work',
        'next_work' => 'Next Work',
        'all_case_studies' => 'All Case Studies',
        'view' => 'View',

    ];

}

