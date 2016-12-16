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

Route::get('/about', function () {
    return view('subviews.about');
});

Route::get('/blog-detail', function () {
    return view('subviews.blog-detail');
});

Route::get('/blog-page', function () {
    return view('subviews.blog-page');
});

Route::get('/compare', function () {
    return view('subviews.compare');
});

Route::get('/contact', function () {
    return view('subviews.contact');
});

Route::get('/faq', function () {
    return view('subviews.faq');
});

Route::get('/gift-voucher', function () {
    return view('subviews.gift-voucher');
});

Route::get('/login', function () {
    return view('subviews.login');
});

Route::get('/register', function () {
    return view('subviews.register');
});

Route::get('/my-account', function () {
    return view('subviews.my-account');
});

Route::get('/order-history', function () {
    return view('subviews.order-history');
});

Route::get('/order-information', function () {
    return view('subviews.order-information');
});

Route::get('/return', function () {
    return view('subviews.return');
});

Route::get('/sitemap', function () {
    return view('subviews.sitemap');
});

Route::get('/quickview', function () {
    return view('subviews.quickview');
});