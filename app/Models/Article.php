<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Comment;

class Article extends Model
{
    protected $fillable = [
        'id', 'title', 'slug', 'description', 'created_at', 'updated_at', 'image_path', 'is_publish'
    ];


    protected $table = 'articles';

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
}
