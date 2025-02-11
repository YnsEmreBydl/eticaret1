<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use Sluggable, HasFactory;
    protected $fillable = [
            'name',
            'slug',
            'category_id',
            'content',
            'shortText',
            'price',
            'size',
            'image',
            'color',
            'quantity',
            'status'  
    ];

    public function categoryitems(){
        return $this -> hasOne(Category::class, 'id','category_id');
    }



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
