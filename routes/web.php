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
    return view('home');
});



Route::get('admin', ['middleware'=>'isadmin',function () {
    return view('admin');
}])->middleware('verified');

Route::get('user', ['middleware'=>'auth' ,function () {
    return view('user');
}])->middleware('verified');
Auth::routes();


Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');
=======
Route::get('checkout', function () {
    return view('checkout');
});
// TODO: POST method checkout route


