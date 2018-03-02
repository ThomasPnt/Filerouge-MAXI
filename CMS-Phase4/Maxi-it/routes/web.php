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

Route::post('/addHouse','HouseController@AddHouse')->name('addHouse');
Route::get('/getAll','HouseController@getAll')->name('getAll');
Route::get('/delete','HouseController@Delete')->name('delete');
Route::post('/update','HouseController@Update')->name('update');

Route::post('/update', 'HostController@Update')->name('update');
Route::post('/login', 'HostController@Login')->name('login');
Route::post('/signup', 'HostController@SignUp')->name('signup');
Route::get('/host','HostController@index')->name('host');

