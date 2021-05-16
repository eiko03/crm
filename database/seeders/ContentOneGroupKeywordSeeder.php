<?php

namespace Database\Seeders;

use App\Models\Admin\ContentOneGroupKeyword;
use Illuminate\Database\Seeder;

class ContentOneGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentOneGroupKeyword::create([
            'language_id' => 1,
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
        ]);
    }
}
