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


Route::get('/','clientController@index');
Route::get('/wp-admin','LoginController@index')->name('user.login');
Route::post('/wp-admin','LoginController@do_login')->name('login');
Route::get('/logout','LoginController@logout')->name('user.logout');

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
	Route::post('/user/tambah_berita','BeritaController@store')->name('user.tambahberita');
	Route::get('/user/detail_berita/{id}','BeritaController@show')->name('user.detail_berita');
	Route::get('/user/edit_berita/{id}','BeritaController@edit')->name('user.edit_berita');
	Route::post('/user/edit_berita/{id}','BeritaController@update')->name('user.edit_berita');
	Route::get('/user/hapus_berita/{id}','BeritaController@destroy')->name('user.hapus_berita');
	Route::post('/user/berita/cari','BeritaController@cari')->name('user.cari_berita');
	Route::get('/user/about','AboutController@index')->name('user.about');
	Route::post('/user/about/edit/{id}','AboutController@update')->name('user.edit_about');

});

