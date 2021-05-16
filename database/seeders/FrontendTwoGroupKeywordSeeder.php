<?php

namespace Database\Seeders;

use App\Models\Admin\FrontendTwoGroupKeyword;
use Illuminate\Database\Seeder;

class FrontendTwoGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        FrontendTwoGroupKeyword::create([
            'language_id' => 1,
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

        ]);
    }
}
