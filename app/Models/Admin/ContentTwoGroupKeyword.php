<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentTwoGroupKeyword extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'language_id',
        'add_about',
        'tab_name',
        'edit_about',
        'work_process',
        'add_work_process',
        'edit_work_process',
        'industries',
        'add_industry',
        'link',
        'edit_industry',
        'skills',
        'add_skill',
        'percent_rate',
        'edit_skill',
        'testimonials',
        'name',
        'job',
        'star',
        'select_your_option',
        'enable',
        'disable',
        'edit_testimonial',
        'counters',
        'add_counter',
        'timer',
        'edit_counter',
        'sponsors',
        'add_sponsor',
        'edit_sponsor',
        'blogs',
        'categories',
        'add_category',
    ];
}
