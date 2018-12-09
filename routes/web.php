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

Route::get('/','PageController@home');
Route::get('/blog','PageController@index');
Route::get('/add','PageController@create');
Route::get('/show/{id}','PageController@show');
Route::post('/create','PageController@store');

Route::resource('pages', 'PageController');
