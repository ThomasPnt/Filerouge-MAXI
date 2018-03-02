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

Route::get('/admin', 'AdminController@index')->name('index');
Route::post('/add_to_list', 'AdminController@addToList')->name('add_to_list');

Route::post('/addHouse','HouseController@AddHouse')->name('addHouse');

Route::post('/update', 'HostController@Update')->name('update');
Route::post('/login', 'HostController@Login')->name('login');
Route::post('/signup', 'HostController@SignUp')->name('signup');
Route::get('/host','HostController@index')->name('host');

