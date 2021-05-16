<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentThreeGroupKeyword extends Model
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
        'edit_category',
        'category_name',
        'status',
        'add_blog',
        'edit_blog',
        'short_desc',
        'tag',
        'separate_with_commas',
        'author',
        'category',
        'post_date',
        'view',
        'works',
        'add_work',
        'results',
        'optional_features',
        'items',
        'steps',
        'edit_work',
        'work_items',
        'edit_work_item',
        'work_steps',
        'add_work_step',
        'edit_work_step',
        'company',
        'about_company',
        'experience',
        'experience_desc',
        'why_choose',
        'add_why_choose',
        'edit_why_choose',
        'teams',
    ];
}
