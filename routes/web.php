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

Route::get('/wp-admin','LoginController@index');
Route::post('/wp-admin','LoginController@do_login')->name('login');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/user','userController@index')->name('user');
	Route::get('/user/kategori','KategoriController@index')->name('user.kategori');
	Route::post('/user/kategori','KategoriController@store')->name('user.do_ketagori');
	Route::get('/user/kategori/hapus/{id}','KategoriController@destroy')->name('user.hapus_kategori');
});

