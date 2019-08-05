<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id', 'name', 'email', 'text', 'parent_id', 'created_at', 'updated_at', 'article_id'
    ];


    protected $table = 'comments';

    public function article() {
        return $this->belongsTo('App\Models\Article', 'article_id');
    }
}
