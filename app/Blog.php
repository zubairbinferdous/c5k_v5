<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
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
