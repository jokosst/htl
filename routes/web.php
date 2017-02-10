<?php
//User

Route::get('/','ProdukController@index');
Route::get('/produkhukum/{katagori}','ProdukController@katagori');
Route::get('login', function () {
	    return view('login');
	});
Route::post('/masuk','logincontroller@login');
Route::get('/lihat/{id}','ProdukController@lihatproduk');
Route::get('/download/{dokumen}','ProdukController@downloadproduk');
Route::get('/kontak','KontakController@userkontak');
Route::post('/cari','ProdukController@cari');
Route::get('/sortir','ProdukController@sortir');
Route::get('bk', 'ProdukController@bkcon');
//admin


Route::group(['middleware' => 'auth'], function() {

	Route::get('/admin/index','ProdukController@admin');
	Route::get('/admin/menu','MenuController@menu');
	Route::get('/admin/submenu','SubmenuController@submenu');
	Route::get('/admin','ProdukController@admin');
	Route::get('/admin/tambah', function () {
	    return view('admin/tambah_produk');
	});
	Route::post('/admin/create','ProdukController@tambah');
	Route::get('/admin/lihat/{id}','ProdukController@view');
	Route::get('/admin/edit/{id}','ProdukController@edit');
	Route::post('/admin/update/{id}','ProdukController@update');
	Route::get('/admin/hapus/{id}','ProdukController@hapus');
	Route::get('/admin/keluar','logincontroller@logout');
	Route::get('/admin/kontak','KontakController@kontak');
	Route::post('/admin/editkontak','KontakController@editkontak');

});

// ini komentar
