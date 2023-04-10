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

Route::get('/list', 'VendingController@showList')->name('vending');

Route::get('/regist','VendingController@showRegistForm')->name('regist');

Route::post('/regist','VendingController@registSubmit')->name('submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/item', 'ItemController@index')->name('item');
