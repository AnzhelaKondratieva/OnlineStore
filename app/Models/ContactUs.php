<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contact_us';

    public $fillable = ['id', 'name','email','message', 'created_at', 'updated_at', 'user_id'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
