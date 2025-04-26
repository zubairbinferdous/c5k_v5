<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'journal_articals';
    protected $fillable = [
        'journal_image',
        'backgroundColor',
        'title',
        'cite_score',
        'impact_factor',
        'aim_scope',
        'issn_print',
        'issn_online',
        'subject_area',
        'article_charge',

    ];
    public function editorials()
        {
            return $this->hasMany(Editorial::class);
        }
        public function bestpaper()
            {
                return $this->hasMany(BestPaperAward::class); // or hasOne() if it returns a single record
            }

}
