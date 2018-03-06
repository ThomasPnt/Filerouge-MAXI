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

Route::view('/', 'refugees.add');
/*Route::post('/', function(\Illuminate\Http\Request $request) {
    var_dump($request->all());
});*/

Route::post('/add_to_list', 'RefugeeController@addToList')->name('addToList');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::any('adminLogin', 'AdminController@index')->name('index');


Route::post('/addHouse','HouseController@AddHouse')->name('addHouse');
Route::get('/host','HostController@index')->name('host');
Route::post('/login', 'HostController@Login')->name('login');
Route::post('/signup', 'HostController@SignUp')->name('signup');
Route::post('/update', 'HostController@Update')->name('update');

