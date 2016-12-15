<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('subviews.product');
});

Route::get('/category', function () {
    return view('subviews.category');
});

Route::get('/cart', function () {
    return view('subviews.cart');
});

Route::get('/checkout', function () {
    return view('subviews.checkout');
});

Route::get('/wishlist', function () {
    return view('subviews.wishlist');
});
