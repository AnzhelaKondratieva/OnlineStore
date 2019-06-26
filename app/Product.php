<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{
    protected $fillable = [
        'id', 'name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is publish'
    ];

    protected $table = 'products';

    public function child() {
        return $this->hasOne('App\Category','parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Category','parent_id');
    }
}

