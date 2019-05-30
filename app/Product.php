<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{

    public static $categories = ['Clothing' => ['type' =>'Clothing',
                                                'subtype' => [
                                                    'Men'=> [
                                                        'name' => 'Men', 'children' => [
                                                            'Suits', 'Shoes', 'Jeans', 'Sunglasses', 'Sport Wear', 'Underwear', 'Shirts']],
                                                    'Women' => [
                                                        'name' => 'Women', 'children' => [
                                                            'Handbags', 'Jewelry', 'Swimwear', 'Underwear', 'Skirts', 'Shoes', 'Winter wear']],
                                                    'Boys' => [
                                                        'name' => 'Boys', 'children' => [
                                                            'Toys & Games', 'Jeans', 'Shirts', 'Shoes', 'Shool bags', 'Suits', 'Winter wear']],
                                                    'Girls' => ['name' =>
                                                        'Girls', 'children' => [
                                                            'Shoes', 'Shirts', 'Dresses', 'Skirts', 'Bags', 'Winter wear', 'Swimwear']]]],
                                'Electronics' => ['type' => 'Electronics',
                                                'subtype' => [
                                                    'Laptops' => [
                                                        'name' => 'Laptops', 'children' => [
                                                            'Apple', 'Dell', 'Asus', 'Others']],
                                                    'Desctops' => [
                                                        'name' => 'Desctops', 'children' => [
                                                            'Routers & Modems', 'CPUs, Processors', 'PC Gaming Stor', 'Graphics Cards',
                                                            'Components', 'Webcam', 'Memory (RAM)', 'Motherboards', 'Keyboards', 'Headphones']],
                                                    'Cameras' => [
                                                        'name' => 'Cameras', 'children' => [
                                                            'Accessories', 'Binoculars', 'Telescopes', 'Camcorders', 'Digital', 'Film Cameras',
                                                            'Flashes', 'Lenses', 'Surveillance', 'Tripods']],
                                                    'Mobile phones' => [
                                                        'name' => 'Mobile phones', 'children' => [
                                                            'Apple', 'Samsung', 'Lenovo', 'Motorola', 'LeEco', 'Asus', 'Acer',
                                                            'Accessories', 'Headphones', 'Memory Cards']]]],
                                'Health and Beauty' => ['type' => 'Health and Beauty',
                                                'subtype' => [
                                                    'Sport' => [
                                                        'name' => 'Sport', 'children' => [
                                                            'Sportwear', 'Bodybuilding', 'Sportgames', 'Tourism']],
                                                    'Cosmetics' => [
                                                        'name' => 'Cosmetics', 'children' => [
                                                            'Creams', 'Parfumes', 'Accessories', 'Shampoo']]]]];
}

