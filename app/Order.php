<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'user_id', 'phone', 'created_at', 'updated_at'
    ];

    protected $table = 'orders';

    public function user() {
        return $this->hasMany('App\Order');
    }

    public function order() {
        return $this->belongsTo('App\User');
    }
}
