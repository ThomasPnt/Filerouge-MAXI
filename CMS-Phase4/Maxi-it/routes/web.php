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
Route::get('/', function(\Illuminate\Http\Request $request) {
    echo Hash::make('test');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/profile', function(){
    return view('profile');
});




/*Route::view('/', 'refugees.add');*/
/*Route::post('/', function(\Illuminate\Http\Request $request) {
    var_dump($request->all());
});*/

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::any('/adminLogin', 'AdminController@index')->name('index');

Route::post('/addHouse','HouseController@AddHouse')->name('addHouse');
Route::get('/getAll','HouseController@getAll')->name('getAll');
Route::get('/delete','HouseController@Delete')->name('delete');
Route::post('/update','HouseController@Update')->name('update');
Route::any('/link/{house?}', 'HouseController@link')->name('link');
Route::get('/unlink/{house?}', 'HouseController@unlink')->name('unlink');

Route::post('/update', 'HostController@Update')->name('update');
Route::get('/host','HostController@index')->name('host');
Route::post('/login', 'HostController@Login')->name('login');
Route::post('/signup', 'HostController@SignUp')->name('signup');
Route::get('/host','HostController@index')->name('host');
Route::get('/logout', 'HostController@LogOut')->name('logout');
Route::post('/update', 'HostController@Update')->name('update');

Route::post('/add_to_list', 'RefugeeController@addToList')->name('addToList');
