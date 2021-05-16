<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentOneGroupKeyword extends Model
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
        'dashboard',
        'home',
        'fixed_content',
        'title',
        'desc',
        'btn_name',
        'btn_link',
        'submit',
        'solutions',
        'section_title_and_desc',
        'top_title',
        'add_solution',
        'add_new',
        'icon',
        'order',
        'action',
        'edit_solution',
        'about',
        'video_link',
        'image',
        'size',
        'recommended_size',
        'created_successfully',
        'updated_successfully',
        'deleted_successfully',
        'current_image',
        'not_yet_created',
        'delete',
        'close',
        'you_wont_be_able_to_revert_this',
        'cancel',
        'yes_delete_it',
    ];
}
