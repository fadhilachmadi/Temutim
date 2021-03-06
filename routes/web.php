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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/premium/payment', 'PaymentController@goToPayment')->name('payment.show');
Route::post('/payment/create', 'PaymentController@createPayment');
Route::resource('user', 'UserController');
Route::get('/contact', 'ContactUsController@index');
Route::resource('contact', 'ContactUsController');
Route::get('/offers', 'PaymentController@showOffer')->name('packageoffer');
Route::get('/result', 'HomeController@search')->name('search');


Route::get('/newpost', function () {
    return view('newpost');
});
Route::get('/offers', 'PaymentController@showOffer')->name('packageoffer');

Route::get('/profile', function () {
    return view('auth.user.profile');
});

Route::get('/editprofile', function () {
    return view('auth.user.edit');
});

Route::get('/profile/{id}', 'UserController@index');
Route::get('/post/detail/{id}', 'PostController@detail')->middleware('UserOnly');
Route::post('/comment/send/{id}', 'CommentController@send');
Route::post('/post/new', 'NewPostController@createNewPost')->name('createnewpost');

Route::get('/post/role/{id}', 'NewPostController@getPostRole')->name('addrolemenu');
Route::post('/post/role/add/{id}', 'NewPostController@createRequiredRole')->name('addNewRole');

Route::patch('/editCV', 'UserController@editCV')->name('edit.cv');

Route::get('/cv/{filename}', 'DownloadController@downloadCV')->name('download.cv');

Route::get('/portofolio/{filename}', 'DownloadController@downloadPortofolio')->name('download.portofolio');
