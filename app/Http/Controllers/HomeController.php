<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        return view('welcome', ['prod' => Product::simplepaginate(3)], ['carts' => Cart::all()]);
    }
    public function prod_detail($id)
    {
        $carts = Cart::all();
        $prod = Product::findOrFail($id);
        $cart = Cart::where('product_id', $id)->get();

        return view('prod_detail', compact('carts', 'prod', 'cart'));
    }

    public function cart()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $product = DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id', Auth::id())
        ->select('products.*')->distinct()
        ->get();

        // $products = DB::table('carts')
        // ->join('products', 'carts.product_id','=','products.id')
        // ->where('carts.user_id', 'products.id')
        // ->select('products.*')
        // ->get();
        // dd($products);
        // $cart = Cart::where('product_id', $products->id)->get();

        // dd($product);
        return view('cart', compact('carts', 'product'));
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::id());
        return view('checkout', compact('carts'));
    }
}
