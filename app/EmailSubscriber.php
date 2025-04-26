<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSubscriber extends Model
{
    use HasFactory;
    protected $table = 'subscribers';
    protected $fillable = [
        'email',
    ];
}
