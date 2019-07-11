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
        $this->cart = new Cart();
        $this->cart->add($product, $count);
        return redirect(route('shopping-cart'));

    }
    public function shoppingCart(Request $request) {
        $this->cart = new Cart();
        $ids=[];
        foreach($this->cart->products as $product) {
            $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)
            ->get()->keyBy('id');

        return view('order.shopping-cart',[
            'cart'=> $this->cart,
            'products' => $products
        ]);
    }

    public function remove(Request $request) {
        $id = $request->id;
        $this->cart = new Cart();
        $this->cart->remove($id);
        dd($this->cart);
        return redirect(route('shopping-cart'));

    }
    public function change(Request $request) {
        $id = $request->id;
        $count = $request->count;
        $this->cart = new Cart();
        dd($this->cart);
        $this->cart->change($id, $count);
        return redirect(route('shopping-cart'));
    }
    public function buy() {
        $this->cart = new Cart();

        return view('shopping-cart',[
            'cart'=> $this->cart
        ]);

    }


}
