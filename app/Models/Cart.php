<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cart {
    public $product;
    public $sum;
    public $count;

    public function __construct()
    {
        $cart = session('cart');
        if($cart) {
            $this->products = $cart['products'];
            $this->calc();
        }
        else {
            $this->products=[];
        }
    }

    public function add(Request $request) {
        $id = $request->products_id;
        $count = $request->count;
        $product = Product::find($id);
        $this->products[]= [
            'id'=>$product->id,
            'price'=>$product->price,
            'count'=>$count
        ];
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

    public function __destruct {
        session(['cart'=> $this->products]);
    }
}