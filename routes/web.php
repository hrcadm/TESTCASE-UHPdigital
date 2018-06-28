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

////////////// DUMMY ROUTES
Route::get('/', 'ViewsController@welcome');
Route::get('/aaa', 'ViewsController@aaa')->name('aaa');
Route::get('/bbb', 'ViewsController@bbb')->name('bbb');
Route::get('/ccc', 'ViewsController@ccc')->name('ccc');
Route::get('/ddd', 'ViewsController@ddd')->name('ddd');
Route::get('/eee', 'ViewsController@eee')->name('eee');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');