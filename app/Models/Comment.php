<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Article;
use \App\Models\User;

class Comment extends Model
{
    protected $fillable = [
        'id', 'name', 'email', 'text', 'parent_id', 'created_at', 'updated_at', 'article_id', 'user_id'
    ];


    protected $table = 'comments';

    public function article() {
        return $this->belongsTo('App\Models\Article', 'article_id');
    }


    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


    public function child() {
        return $this->hasMany('App\Models\Comment','parent_id');
    }


    public function parent()
    {
        return $this->belongsTo('App\Models\Comment','parent_id');
    }
}
