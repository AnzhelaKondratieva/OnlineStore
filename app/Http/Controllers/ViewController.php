<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {

//        $name = ['Tania','Tom', 'Bred', 'Funny', 'Catherine'];
//        for($i=0; $i< 5; $i++) {
//            $model = new User();
//            $model->name = $name[$i];
//            $c = count($name) - 1;
//            $model->email = $name[rand(0, $c)] . '@gmail.com';
//            $model->password = \Hash::make($model->email);
//            $model->save();
//        }
//        $categories = Category::where('is_publish', 1)->get();
//        $menu = [];
//        foreach($categories as $key => $category) {
//            $menu[$category->parent_id][] = [
//                'name' =>$category->name,
//                'slug' =>$category->slug,
//            ];
//        }
        return view('home', [
            'categories' => Category::where('is_publish', 1)->get()
        ]);
    }
//foreach ($menu as $key => $value) {
//    foreach ($categories as $key => $category) {
//        <li><a href="{{route('category',['slug'=>$category['slug'])}}">{{$category['name']}}<a></li>
//во view}

    public function blog() {
        $article = Article::where(
            [
                'is_publish' => 1
            ]
        )->paginate(2);
        return view('blog.blog', ['article' => $article, 'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function error() {
        return view('404', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function about() {
        return view('about', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }

    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('products.category-detail', ['category' => $category,  'categories' => Category::where('is_publish', 1)->get()]);

    }
    public function categories() {
        $categories = Category::all();
        return view('products.categories', ['categories' => $categories]);
    }

    public function faq() {
        return view('info.faq', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function blogDetails($slug) {
        $article = Article::where('slug', $slug)->first();
        return view('blog.blog-details', [
            'article' => $article, 'categories' => Category::where('is_publish', 1)->get()
        ]);
    }
    public function checkout() {
        return view('order.checkout', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function logIn() {
        return view('auth.login', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function shoppingCart() {
        return view('order.shopping-cart', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function myWishlist() {
        return view('order.my-wishlist', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function contact() {
        return view('info.contact', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function detail() {
        return view('products.detail', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function myAccount() {
        return view('auth.myaccount', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function productComparison() {
        return view('order.product-comparison', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function termsConditions() {
        return view('info.terms-conditions', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
    public function trackOrders() {
        return view('order.track-orders', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
}