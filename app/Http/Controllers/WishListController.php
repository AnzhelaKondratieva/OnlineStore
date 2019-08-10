<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\WishList;
use App\Models\User;

class WishListController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function myWishlist()
    {
        $user = Auth::user();
        $wishlist = WishList::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
        return view('order.my-wishlist', ['wishlist' => $wishlist]);
    }

    public function add(Request $request)
    {
        $wishlist = new WishList;
        $wishlist->user_id = $request->user_id;
        $wishlist->product_id = $request->id;
        $wishlist->save();
        return redirect(route('my-wishlist'));
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $wishlist = Wishlist::find($id);
        $wishlist->delete($id);

        return redirect()->route('my-wishlist')
            ->with('success',
                'Item successfully deleted');
    }
}
