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
Auth::routes();

Route::group(['middleware' => 'auth'], function ($router) {
	Route::group(['prefix'=>'admin'], function ($router) {
		Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
		Route::resource('posts', 'Admin\PostController');
	});
	Route::get('home', 'Admin\DashboardController@index')->name('home');
	Route::get('/', 'Admin\DashboardController@index');
});





