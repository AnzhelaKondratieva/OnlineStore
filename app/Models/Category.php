<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id', 'name', 'description', 'is_publish', 'parent_id', 'slug'
    ];


    protected $table = 'categories';


    public function child() {
        return $this->hasMany('App\Category','parent_id');
    }


    public function parent()
    {
        return $this->belongsTo('App\Category','parent_id');
    }


    public function product()
    {
        return $this->hasMany('App\Product', 'category_id');
    }
}
