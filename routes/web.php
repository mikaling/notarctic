<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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
    return view('home');
});



Route::get('admin', ['middleware'=>'isadmin',function () {
    return view('admin');
}])->middleware('verified');

Route::get('user', ['middleware'=>'auth' ,function () {
    return view('user');
}])->middleware('verified');
Auth::routes();





Route::get('/faq', 'FaqController@index');
Route::get('/reviews', 'ReviewController@index');
Route::get('/','ProductsController@homePageProducts');
Route::get('/products','ProductsController@displayByCategory');
Route::get('/description/{id}','ProductsController@productDescription');

Route::get('/categories/{category}','ProductsController@show');

Route::get('/search', 'ProductsController@showSearchResults')->name('search');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store')->middleware('auth');
Route::delete('/cart/{rowId}', 'CartController@remove')->name('cart.remove')->middleware('auth');
Route::patch('/cart/{rowId}', 'CartController@update')->name('cart.update')->middleware('auth');

//Route::get('products/{cat_id}','ProductsController@productDescription');

Route::resource('wishlist','WishlistController')->middleware('auth');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');

Route::post('/stripecharge', 'StripePaymentController@charge');
Route::get('/stripepayment', 'StripePaymentController@index');

Route::get('checkout', function () {
    return view('checkout');
});
// TODO: POST method checkout route

Route::get('afterpayment', function () {
    return view('afterpayment');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
