<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentFiveGroupKeyword extends Model
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
        'mark_all_as_read',
        'mark',
        'messages',
        'site_info',
        'copyright',
        'address',
        'address_map_link',
        'phone',
        'site_images',
        'favicon',
        'admin_logo',
        'admin_small_logo_image',
        'site_white_logo_image',
        'site_colored_logo_image',
        'site_small_logo_image',
        'site_footer_logo_image',
        'google_analytic',
        'breadcrumb',
        'sections',
        'seo',
        'site_name',
        'site_desc',
        'site_keywords',
        'please_create_a_category',
        'languages',
        'add_language',
        'edit_language',
        'language_name',
        'language_code',
        'direction',
        'keywords',
        'for_admin_panel',
    ];
}
