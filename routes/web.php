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
    return view('front.welcome');
});

Route::get('/swimwear', function () {
    return view('front.pages.swimwear.index');
});
Route::get('/fitwear', function () {
    return view('front.pages.fitwear.index');
});

Route::get('/product-list', function () {
    return view('front.pages.product.index');
});
