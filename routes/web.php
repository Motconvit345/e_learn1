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
    return view('welcome');
});

use Carbon\Carbon;

Route::get('test', function () {
    echo Carbon::now();
});

Route::group(['prefix' => 'admin'],function () {
	Route::resource('cate','CateController', ['expert' => [
		'show'
		]]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
