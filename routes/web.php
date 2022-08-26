<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('prod_detail/{id}', [HomeController::class, 'prod_detail']);

Route::middleware(['auth'])->group(function(){

    Route::get('cart', [HomeController::class, 'cart']);
    Route::get('checkout', [HomeController::class, 'checkout']);

    Route::get('addCart/{id}', [CartController::class, 'addcart']);
    Route::get('prod_detail/addCart/{id}', [CartController::class, 'addCart']);
    Route::get('prod_detail/decCart/{id}', [CartController::class, 'decCart']);
});
