<?php

namespace Database\Seeders;

use App\Models\Admin\ContentThreeGroupKeyword;
use Illuminate\Database\Seeder;

class ContentThreeGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentThreeGroupKeyword::create([
            'language_id' => 1,
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
        ]);
    }
}
