<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;


class CartController extends Controller
{
    private $cart;

//    public function __construct(){
//        //     $this->cart = new Cart();
//        // }

    public function add(Request $request) {
        $id = $request->id;
        $count = $request->count;
        $product = Product::find($id);
        dd($product);
        $this->cart->add($product, $count);
        return redirect(route('shopping-cart'));

    }
    public function shoppingCart(Request $request) {

        return view('order.shopping-cart');
    }

    public function remove() {

    }
    public function change() {

    }
    public function clear() {

    }
    private function calc() {
        $this->count = 0;
        $this->sum = 0;

    }

    public function __destruct() {
        session(['cart'=> $this->products]);
    }
}
