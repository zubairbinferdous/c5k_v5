<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner_section';
    protected $fillable = [
        'banner',
        'first_heading',
        'first_content',
        'second_heading',
        'second_content',
        'third_heading',
        'third_content',

    ];
}
