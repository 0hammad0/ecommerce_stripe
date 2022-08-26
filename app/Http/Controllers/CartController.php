<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart($id)
    {
        $cart = new Cart;
        $product = Product::findOrFail($id);

        $cart->product_id = $product->id;
        $cart->user_id = Auth::id();
        $cart->save();

        return redirect()->back();
    }

    public function decCart($id)
    {
        Cart::where('product_id', $id)->first()->delete();
        return redirect()->back();
    }
}
