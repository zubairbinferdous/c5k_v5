<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'title',
        'category_id',
        'details',
        'image',
    ];
    
    public function category()
    {
        return $this->belongsTo('App\ArticleCategory', 'category_id');
    }
}
