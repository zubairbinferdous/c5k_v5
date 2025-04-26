<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    public function category()
    {
        return $this->belongsTo('App\ArticleCategory', 'category_id');
    }

    public function issues()
    {
        return $this->hasMany('App\ArticleIssue', 'article_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'writer_id');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
