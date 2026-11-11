<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name',
        'description',
        'price',
        'stock',
        'user_id',
        'category_id',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }

    public function category(){
        return $this->belongTo(Category::class);
    }
};
