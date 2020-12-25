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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/premium/payment', 'PaymentController@goToPayment')->name('payment.show');
Route::post('/payment/create', 'PaymentController@createPayment');
Route::resource('user','UserController');
Route::get('/contact', 'ContactUsController@index');
Route::resource('contact', 'ContactUsController');
Route::get('/offers','PaymentController@showOffer')->name('packageoffer');
