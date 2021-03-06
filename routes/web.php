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

Route::get('/home', 'UsersController@index')->name('home')->middleware('auth');

//User Route
Route::get('/admin/user/edit','UsersController@edit')->middleware('auth');
Route::patch('/admin/user','UsersController@update')->middleware('auth');