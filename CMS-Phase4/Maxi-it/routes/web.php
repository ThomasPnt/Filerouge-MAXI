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
/*Route::get('/', function(\Illuminate\Http\Request $request) {
    echo Hash::make('test');
});*/

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/404' , function(){
    return view('error');
});


Route::group(['middleware' => 'isAuth'],function() {

    Route::get('/profile', function(){
        $infoProfile = DB::select('select * from hosts where id = :id',['id'=> session('id')]);
        return view('profile', ['infoProfile' => $infoProfile]);
    });

    Route::get('/house', function(){
        $house = DB::table('houses')->where('host_id', session('id'))->first();
        return view('house', compact('house'));
    });

});


Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::any('/adminLogin', 'AdminController@index')->name('index');
Route::any('/editInfos/{refugeeGet?}', 'RefugeeController@editInfos');

Route::post('/addHouse','HouseController@AddHouse')->name('addHouse');
Route::get('/getAll','HouseController@getAll')->name('getAll');
Route::get('/delete','HouseController@Delete')->name('delete');
Route::any('/updateHouse/{houseGet?}','HouseController@UpdateHouse');
Route::any('/updateHost/{hostGet?}','HostController@UpdateHost');
Route::any('/link/{house?}', 'HouseController@link')->name('link');
Route::get('/deleteHouse/{houseGet?}','HouseController@Delete')->name('delete');
Route::get('/deleteHost/{hostGet?}','HostController@Delete')->name('delete');
Route::get('/unlink/{house?}', 'HouseController@unlink')->name('unlink');

Route::get('/host','HostController@index')->name('host');
Route::post('/login', 'HostController@Login')->name('login');
Route::post('/signup', 'HostController@SignUp')->name('signup');
Route::get('/logout', 'HostController@LogOut')->name('logout');
Route::any('/addtolist', 'RefugeeController@addToList')->name('addToList');
Route::get('/deleteref/{id}','RefugeeController@removeFromList');
Route::get('/logout', 'AdminController@LogOut')->name('logout');
