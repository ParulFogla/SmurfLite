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

Route::get('/','WebController@homePage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/web','WebController@homePage')->name('web');

Route::get('/about','WebController@about')->name('about');

// Route::get('/store','WebController@store')->name('store');

// Route::get('/service','WebController@service')->name('service');

Route::get('/contact','WebController@contact')->name('contact');

Route::get('/privacy','WebController@privacy')->name('privacy');

Route::get('/delivery','WebController@delivery')->name('delivery');

Route::get('/product','WebController@product')->name('product');

Route::get('/return','WebController@return')->name('return');

//Resource for store
Route::resource('/store', 'StoreController');
// Route::resource('/service', 'ServiceController');
Route::get('/service/{id}','ServiceController@showService');
Route::get('/admin','AdminController@admin')->name('admin')->middleware('admin');

Route::post('/putdata','StoreController@putData');
Route::get('/putdata','StoreController@formData');

Route::post('/itemlist/putdata','StoreController@listData');
