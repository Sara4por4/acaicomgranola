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

Route::get('/products-list', function () {
    return view('front.pages.product.index');
});

Route::get('/product-detail', function () {
    return view('front.pages.product.show');
});
Route::get('/contacts', function () {
    return view('front.pages.contacts.index');
});
Route::get('/about', function () {
    return view('front.pages.about.index');
});
Route::get('/sustainability', function () {
    return view('front.pages.sustainability.index');
});
Route::get('/stores', function () {
    return view('front.pages.stores.index');
});
Route::get('/search', function () {
    return view('front.pages.search.index');
});
Route::get('/guide', function () {
    return view('front.pages.guide.index');
});
Route::get('/info', function () {
    return view('front.pages.info.index');
});
Route::get('/user', function () {
    return view('front.pages.user.index');
});
Route::get('/checkout', function () {
    return view('front.pages.checkout.index');
});
