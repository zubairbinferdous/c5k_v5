<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookFrontMatter extends Model
{
    use HasFactory;

    protected $table = 'books_front_matter';
    protected $fillable = [
        'book_id',
        'front_matter',
        'pages_range',
        'pdf_url',
        'created_at',
        'updated_at',
    ];
}
