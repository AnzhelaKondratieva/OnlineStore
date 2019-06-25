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
        return view('home');
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
        return view('blog.blog', ['article' => $article]);
    }
    public function error() {
        return view('404');
    }
    public function about() {
        return view('about');
    }

    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('products.category-detail', ['category' => $category]);

    }
    public function categories() {
        $categories = Category::all();
        return view('products.categories', ['categories' => $categories]);
    }

    public function faq() {
        return view('info.faq');
    }
    public function blogDetails() {
        return view('blog.blog-details');
    }
    public function checkout() {
        return view('order.checkout');
    }
    public function logIn() {
        return view('auth.login');
    }
    public function shoppingCart() {
        return view('order.shopping-cart');
    }
    public function myWishlist() {
        return view('order.my-wishlist');
    }
    public function contact() {
        return view('info.contact');
    }
    public function detail() {
        return view('products.detail');
    }
    public function myAccount() {
        return view('auth.myaccount');
    }
    public function productComparison() {
        return view('order.product-comparison');
    }
    public function termsConditions() {
        return view('info.terms-conditions');
    }
    public function trackOrders() {
        return view('order.track-orders');
    }
}