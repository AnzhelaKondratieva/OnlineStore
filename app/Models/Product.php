<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{
    protected $fillable = [
        'id', 'name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is publish', 'created_at', 'updated_at'
    ];


    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function getUrl() {
        return $this->category()->first()->slug;
    }
}

