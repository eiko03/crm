<?php

namespace Database\Seeders;

use App\Models\Admin\ContentTwoGroupKeyword;
use Illuminate\Database\Seeder;

class ContentTwoGroupKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create datas
        ContentTwoGroupKeyword::create([
            'language_id' => 1,
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
        ]);
    }
}
