<?php

namespace Database\Seeders;

use App\Models\Admin\FrontendOneGroupKeyword;
use Illuminate\Database\Seeder;

class FrontendOneGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        FrontendOneGroupKeyword::create([
            'language_id' => 1,
            'home' => 'Home',
            'company' => 'Company',
            'about_company' => 'About Company',
            'meet_our_team' => 'Meat Our Team',
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
        ]);
    }
}
