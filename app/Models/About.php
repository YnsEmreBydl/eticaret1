<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name',
        'image',
        'content',
        'text1icon',
        'text1',
        'text1content',
        'text2icon',
        'text2',
        'text2content',
        'text3icon',
        'text3',
        'text3content'
    ];
}
