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

Route::get('/faq', 'FaqController@index');
Route::get('/reviews', 'ReviewController@index');
Route::get('/','ProductsController@homePageProducts');
Route::get('/products','ProductsController@displayByCategory');
Route::get('/description/{id}','ProductsController@productDescription');

Route::get('/categories/{category}','ProductsController@show');

//Route::get('products/{cat_id}','ProductsController@productDescription');

//Route::resource('/products','ProductsController');
