<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'language_id',
        'top_title',
        'title',
        'desc',
        'experience',
        'experience_desc',
        'video_link',
        'video_link',
        'about_image',
        'about_image_2',
        'about_image_3',
        'order',
    ];
}
