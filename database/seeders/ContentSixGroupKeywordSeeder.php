<?php

namespace Database\Seeders;

use App\Models\Admin\ContentSixGroupKeyword;
use Illuminate\Database\Seeder;

class ContentSixGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentSixGroupKeyword::create([
            'language_id' => 1,
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
        ]);
    }
}
