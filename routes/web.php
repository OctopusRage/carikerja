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

Route::get('/', 'FrontPageController@index');
Route::Auth();
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::get('/home', 'FrontPageController@index')->name('home');
