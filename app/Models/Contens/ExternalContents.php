<?php

namespace App\Models\Contens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExternalContents extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'content_section',
        'content_type',
        'content_father',
        'content_grandson',
        'content_colums',
        'content_colums_sons',
        'content_background_color',
        'content_background_image',
        'content_align',
        'content_show_title',
        'content_title_align',
        'content_title_size',
        'content_title',
        'content_intro',
        'content_description',
        'content_url',
        'content_url_target',
        'content_show_image',
        'content_image',
        'content_video',
        'content_order',
    ];
}
