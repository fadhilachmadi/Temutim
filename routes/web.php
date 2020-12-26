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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/premium/payment', 'PaymentController@goToPayment')->name('payment.show');
Route::post('/payment/create', 'PaymentController@createPayment');
Route::resource('user','UserController');
Route::get('/contact', 'ContactUsController@index');
Route::resource('contact', 'ContactUsController');
Route::get('/offers','PaymentController@showOffer')->name('packageoffer');

Route::get('/profile', function () {
    return view('auth.user.profile');
});

Route::get('/editprofile', function () {
    return view('auth.user.edit');
});

Route::get('/post/detail/{id}', 'PostController@detail');
Route::post('/comment/send/{id}', 'CommentController@send');
Route::get('/profile/{id}','UserController@index');
