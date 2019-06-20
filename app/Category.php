<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id', 'name', 'description', 'publish', 'parent_id'
    ];

    protected $table = 'categories';

    public function CategoryItem() {



    }
}
