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
	return redirect('/home');
});

Route::get('/home', 'MainController@home')->name('home');
Route::get('/appointments', 'MainController@appointments')->name('appointments');
Route::get('/medicineOrder', 'MainController@medicineOrder')->name('medicineOrder');