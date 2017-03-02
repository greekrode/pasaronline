<?php

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
    return view('welcome');
});

Route::get('/registeraccount', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sell', function () {
    return view('sell');
});

Route::get('/salesdetail', function () {
    return view('salesdetail');
});

Route::get('/home',function(){
    return view ('home');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/table', function () {
    return view('table');
});