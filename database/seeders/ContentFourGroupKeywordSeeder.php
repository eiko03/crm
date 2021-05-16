<?php

namespace Database\Seeders;

use App\Models\Admin\ContentFourGroupKeyword;
use Illuminate\Database\Seeder;

class ContentFourGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentFourGroupKeyword::create([
            'language_id' => 1,
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
            'copied_text' => 'Copied Text',
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
        ]);
    }
}
