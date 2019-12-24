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
	Route::post('/user/kategori/cari','KategoriController@search')->name('user.carikategori');
	Route::get('/user/kategori/edit/{id}','KategoriController@edit')->name('user.edit_kategori');
	Route::post('/user/kategori/edit/{id}','KategoriController@update')->name('user.do_edit_kategori');
	Route::get('/user/berita','BeritaController@index')->name('user.berita');
	Route::get('/user/tambah_berita','BeritaController@create')->name('user.tambahberita');

});

