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
Route::get('/', 'ViewsController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home')->middleware('auth');
Route::get('details/{id}', 'AdminController@show')->name('show')->middleware('auth');