<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;

    protected $table = 'volume';
    protected $guard = [];
    protected $fillable = [];
}
