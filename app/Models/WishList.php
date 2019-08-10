<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;

class WishList extends Model
{

    protected $table = "wishlists";

    protected $fillable = [
        'id', 'user_id', 'product_id', 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }





}
