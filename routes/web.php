<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/products', function () {
    $products = \DB::table('products')->get();
    return view('products.index', compact('products'));
});