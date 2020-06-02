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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'PhotoController@show');
Route::post('process', 'PhotoController@store');
Route::post('delete', 'PhotoController@delete');
Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('login');
