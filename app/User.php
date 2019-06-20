<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';

    public function Users() {
        $name = ['Amelia','Oliver', 'Jack', 'Mark', 'EMILY'];

        for($i=0; $i< 100; $i++) {
            $model = new User();
            $user->name = 'user'.$i;
            $c = count($name)-1;
            $model->email = $name[rand(0,$c)].$i.'@gmail.com';
            $model->password =\Hash::make($model->email);
            $model->save();
        }
    }
}
