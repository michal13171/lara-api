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
Route::resource('/api/product', 'ProductController');
Route::get('/api/product/max/value', 'ProductController@getMinAmount')->name('product.getMinAmount');
Route::get('/api/product/none/value', 'ProductController@getWithNoResultAmount')->name('product.getWithNoResultAmount');

