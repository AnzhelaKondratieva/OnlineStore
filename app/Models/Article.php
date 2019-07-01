<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id', 'title', 'slug', 'description', 'created_at', 'updated_at', 'image_path', 'is_publish'
    ];


    protected $table = 'articles';
}