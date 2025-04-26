<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $table = 'editorial';
    protected $fillable = [
        'journal_id',
        'editorial_member',
    ];

    public function journal()
    {
        return $this->belongsTo('App\Journal', 'journal_id');
    }

}
