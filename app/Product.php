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
        'name', 'email', 'password',
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
}


class Product {
    public static $categories = ['Clothing'=> ['Men' => ['Suits', 'Shoes', 'Jeans', 'Sunglasses', 'Sport Wear', 'Underwear', 'Shirts'],
                                              'Women' => ['Handbags', 'Jewelry', 'Swimwear', 'Underwear', 'Skirts', 'Shoes', 'Winter wear'],
                                              'Boys' => ['Toys & Games', 'Jeans', 'Shirts', 'Shoes', 'Shool bags', 'Suits', 'Winter wear'],
                                              'Girls' => ['Shoes', 'Shorts', 'Dresses', 'Shirts', 'Bags', 'Winter wear', 'Swimwear']],
                                'Electronics' => ['Laptops' => ['Apple', 'Dell', 'Asus', 'Others'],
                                                  'Desctops' => ['Routers & Modems', 'CPUs, Processors', 'PC Gaming Stor', 'Graphics Cards',
                                                      '         Components', 'Webcam', 'Memory (RAM)', 'Motherboards', 'Keyboards', 'Headphones'],
                                                    'Cameras' => ['Accessories', 'Binoculars', 'Telescopes', 'Camcorders', 'Digital', 'Film Cameras',
                                                                'Flashes', 'Lenses', 'Surveillance', 'Tripods'],
                                                    'Mobile phones' => ['Apple', 'Samsung', 'Lenovo', 'Motorola', 'LeEco', 'Asus', 'Acer',
                                                                'Accessories', 'Headphones', 'Memory Cards']],
                                'Health and Beauty' => ['Sport' => ['Sportwear', 'Bodybuilding', 'Sportgames', 'Tourism'],
                                'Cosmetics' => ['Creams', 'Parfumes', 'Accessories', 'Shampoo']]];
}