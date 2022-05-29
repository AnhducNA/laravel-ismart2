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
    return view('index');
});

Route::get('/product/cat/list', 'App\Http\Controllers\ProductController@listCat');
Route::get('/product/detail/show/{id}', 'App\Http\Controllers\ProductController@showDetail');

Route::get('/blog/list', 'App\Http\Controllers\BlogController@list');
Route::get('/blog/detail/{id}', 'App\Http\Controllers\BlogController@detail');

Route::get('/cart', 'App\Http\Controllers\CartController@cart');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');

