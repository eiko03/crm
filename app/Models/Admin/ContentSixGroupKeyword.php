<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentSixGroupKeyword extends Model
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
        'for_frontend',
        'content_group',
        'hide',
        'show',
        'display_dropdown',
        'default_site_language',
        'please_try_again',
        'you_are_not_authorized',
        'comment',
        'comments',
        'approval_status',
        'mark_all_as_approval',
        'read',
        'unread',
        'profile',
        'change_password',
        'current_password',
        'new_password',
        'confirm_password',
        'pending_approval',
        'approval',
        'data_language',
        'which_language',
        'reminding',
        'notifications',
        'logout',
        'optimizer',
        'settings',
        'add_testimonial',
        'add_work_item',
    ];

}
