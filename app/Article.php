<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id', 'title', 'slug', 'description', 'created_at', 'updated_at'
    ];

    protected $table = 'articles';
}
