<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogBanner extends Model
{
    use HasFactory;
    protected $table = 'banner_section_two';
    protected $fillable = [
        'blog_banner',
        'first_heading',
        'heading_two',

    ];
}
