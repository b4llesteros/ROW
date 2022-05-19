<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/pages/home/index');
});

Route::get('/cart', function () {
    return view('front/pages/cart/index');
});

Route::get('/checkout', function () {
    return view('front/pages/checkout/index');
});

Route::get('/contact', function () {
    return view('front/pages/contact/index');
});

Route::get('/productpage', function () {
    return view('front/pages/productpage/index');
});

Route::get('/galleryproduct', function () {
    return view('front/pages/galleryproduct/index');
});

Route::get('/admin/users', function () {
    return view('admin/pages/users/index');
});

Route::get('/faqs', function () {
    return view('front/pages/faqs/index');
});




