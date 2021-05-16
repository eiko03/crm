<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendOneGroupKeyword extends Model
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
        'home',
        'company',
        'about_company',
        'meet_our_team',
        'contact_us',
        'works',
        'blogs',
        'pages',
        'gallery',
        'team',
        'faqs',
        'start_your_project_today',
        'search',
        'search_here',
        'search_now',
        'close',
        'get_in_touch',
        'send_your_review',
        'contact_info',
        'useful_links',
        'office_location',
        'quick_contact',
        'your_message_has_been_delivered',
        'your_comment_is_pending_approval',
        'updating',
        'all',
        'by_admin',
        'comments',
        'search_results',
        'nothing_found',
        'keyword',
        'popular_post',
    ];

}
