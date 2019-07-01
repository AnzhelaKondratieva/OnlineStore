<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{
    protected $fillable = [
        'id', 'name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is publish'
    ];


    protected $table = 'products';


    public function category() {
        return $this->hasMany('App\Product');
    }


    public function product()
    {
        return $this->belongsTo('App\Category');
    }
}

