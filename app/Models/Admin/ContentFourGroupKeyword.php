<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentFourGroupKeyword extends Model
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
        'add_team',
        'edit_team',
        'faqs',
        'question',
        'answer',
        'add_faq',
        'edit_faq',
        'galleries',
        'add_gallery',
        'edit_gallery',
        'pages',
        'add_page',
        'edit_page',
        'display_footer_menu',
        'other',
        'yes',
        'no',
        'copy_link',
        'copied_text',
        'map_iframe',
        'map_iframe_desc_placeholder',
        'contact',
        'contact_info',
        'add_contact',
        'edit_contact',
        'socials',
        'add_social',
        'edit_social',
        'email',
        'subject',
        'message',
        'read_status',
    ];
}
