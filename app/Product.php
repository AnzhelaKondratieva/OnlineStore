<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{
    protected $fillable = [
        'id', 'name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is publish'
    ];

    protected $table = 'products';

    public static $categories =
        [
            'Clothing' =>
            ['type' => 'Clothing',
                'subtype' => [
                    'Men' => [
                        'name' => 'Men',
                        'children' => [
                            'Suits', 'Shoes', 'Jeans', 'Sunglasses', 'Sport Wear', 'Underwear']
                    ],
                    'Women' => [
                        'name' => 'Women', 'children' => [
                            'Handbags', 'Jewelry', 'Swimwear', 'Underwear', 'Skirts', 'Shoes', 'Winter wear']],
                    'Boys' => [
                        'name' => 'Boys', 'children' => [
                            'Toys & Games', 'Jeans', 'Shirts', 'Shoes', 'School bags', 'Suits', 'Winter wear']],
                    'Girls' => ['name' =>
                        'Girls', 'children' => [
                        'Shoes', 'Shirts', 'Dresses', 'Skirts', 'Bags', 'Winter wear', 'Swimwear']]]],
            'Electronics' => ['type' => 'Electronics',
                'subtype' => [
                    'Laptops' => [
                        'name' => 'Laptops', 'children' => [
                            'Apple', 'Dell', 'Asus', 'Others']],
                    'Desctops' => [
                        'name' => 'Desktops', 'children' => [
                            'Routers & Modems', 'CPUs, Processors', 'PC Gaming Stor', 'Graphics Cards',
                            'Components', 'Webcam', 'Memory (RAM)', 'Motherboards']],
                    'Cameras' => [
                        'name' => 'Cameras', 'children' => [
                            'Accessories', 'Digital', 'Film Cameras', 'Tripods']],
                    'Mobile phones' => [
                        'name' => 'Mobile phones', 'children' => [
                            'Apple', 'Samsung', 'Lenovo',
                            'Accessories', 'Headphones', 'Memory Cards']]]],
            'Health and Beauty' => ['type' => 'Health and Beauty',
                'subtype' => [
                    'Sport' => [
                        'name' => 'Sport', 'children' => [
                            'Sport wear', 'Bodybuilding', 'Sportgames', 'Tourism']],
                    'Cosmetics' => [
                        'name' => 'Cosmetics', 'children' => [
                            'Creams', 'Parfumes', 'Accessories']]]]];
}

