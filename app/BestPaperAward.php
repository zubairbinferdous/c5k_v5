<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestPaperAward extends Model
{
    use HasFactory;
    protected $table = 'bestpapers';
    protected $fillable = [
        'journal_id',
        'bestpaper',
    ];

    public function journal()
    {
        return $this->belongsTo('App\Journal', 'journal_id');
    }
}
