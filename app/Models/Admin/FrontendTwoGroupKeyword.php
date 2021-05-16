<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendTwoGroupKeyword extends Model
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
        'tags',
        'leave_a_reply',
        'name',
        'email',
        'your_comment',
        'post_comments',
        'categories',
        'your_name',
        'enter_name_here',
        'email_address',
        'subject',
        'message',
        'message_goes_here',
        'send_your_message',
        'read_more',
        'meet_all_members',
        'author',
        'posted_on',
        'posted_comments',
        'prev_post',
        'next_post',
        'contact',
        'frequently_asked_questions',
        'processing_system',
        'step',
        'results',
        'prev_work',
        'next_work',
        'all_case_studies',
        'view',

    ];

}
