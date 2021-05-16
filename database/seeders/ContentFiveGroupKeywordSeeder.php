<?php

namespace Database\Seeders;

use App\Models\Admin\ContentFiveGroupKeyword;
use Illuminate\Database\Seeder;

class ContentFiveGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentFiveGroupKeyword::create([
            'language_id' => 1,
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
        ]);
    }
}
