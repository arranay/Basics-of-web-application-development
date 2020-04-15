<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductsController@index');
Route::post('/add_products', 'ProductsController@add_products');
Route::get('/delete/{id}', 'ProductsController@delete');

Route::get('/add', function(){
	return view('add_products');
});

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/showShoppingCart', 'ProductsController@showShoppingCart');
Route::get('/deleteFromCart/{id}', 'ProductsController@deleteFromCart');


