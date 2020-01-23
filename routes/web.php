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

Route::get('/', 'TestController@welcome');
Route::get('/create', 'TestController@create');//form
Route::POST('/create', 'TestController@insert');//insert

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
