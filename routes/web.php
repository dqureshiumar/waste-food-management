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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/food','FoodsControlle');
Route::get('/view-all','HomeController@views')->name('view-all');
Route::get('/views','HomeController@admin_view');
Route::get('/all-users','HomeController@all_users');
