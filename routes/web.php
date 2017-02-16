<?php
//User

Route::get('/','ProdukController@index');
Route::get('/produkhukum/{katagori}','ProdukController@katagori');
Route::get('login', function () {
	    return view('login');
	});
Route::post('/masuk','logincontroller@login');
Route::get('/lihat/{id}','ProdukController@lihatproduk');
//download
Route::get('/download/{dokumen}','ProdukController@downloadproduk');

Route::get('/kontak','KontakController@userkontak');
Route::post('/cari','ProdukController@cari');
Route::get('/sortir','ProdukController@sortir');
Route::get('bk', 'ProdukController@bkcon');
//admin


Route::group(['middleware' => 'auth'], function() {
Route::get('home', function () {
	    return view('home');
	});
Route::get('/keluar','logincontroller@logout');

//middleware admin
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/index','ProdukController@admin');
	Route::get('/admin/menu','MenuController@menu');
	Route::get('/admin/submenu','SubmenuController@submenu');
	Route::get('/admin','ProdukController@admin');
	Route::get('/admin/user','AdminController@user');
	//tambah
	Route::get('/admin/tambah','SubmenuController@submenuindex');
	Route::get('/admin/tambahmenu', function () {
	    return view('admin/tambah_menu');
	});
	Route::get('/admin/tambahuser', function () {
	    return view('admin/tambah_user');
	});
	Route::get('/admin/tambahsubmenu','MenuController@tambahsubmenu');
	Route::post('/admin/create','ProdukController@tambah');
	Route::post('/admin/createmenu','MenuController@create');
	Route::post('/admin/createsubmenu','SubmenuController@create');
	Route::post('/admin/createuser','AdminController@create');

//lihat
	Route::get('/admin/lihat/{id}','ProdukController@view');

	//edit
	Route::get('/admin/edit/{id}','ProdukController@edit');
	Route::get('/admin/editmenu/{id}','MenuController@edit');
	Route::get('/admin/editsubmenu/{id}','SubmenuController@edit');
	Route::get('/admin/edituser/{id}','AdminController@edit');

//update
	Route::post('/admin/update/{id}','ProdukController@update');
	Route::post('/admin/updatemenu/{id}','MenuController@update');
	Route::post('/admin/updatesubmenu/{id}','SubmenuController@update');
	Route::post('/admin/updateuser/{id}','AdminController@update');
	
	//hapus
	Route::get('/admin/hapus/{id}','ProdukController@hapus');
	Route::get('/admin/hapusmenu/{id}','MenuController@hapus');
	Route::get('/admin/hapussubmenu/{id}','SubmenuController@hapus');
	Route::get('/admin/hapususer/{id}','AdminController@hapus');

	
	Route::get('/admin/kontak','KontakController@kontak');
	Route::post('/admin/editkontak','KontakController@editkontak');
});

//middleware kontributor
Route::group(['middleware' => 'kontributor'], function() {

			Route::get('/kontributor','ProdukController@kontributor');
			Route::get('/kontributor/tambah','SubmenuController@submenukontributor');
			Route::post('/kontributor/createkontributor','ProdukController@tambahproduk');
			Route::get('/kontributor/lihat/{id}','ProdukController@viewkontributor');
			Route::get('/kontributor/edit/{id}','ProdukController@editkontributor');
			Route::post('/kontributor/update/{id}','ProdukController@updatekontributor');
			Route::get('/kontributor/hapus/{id}','ProdukController@hapuskontributor');
});

});

// ini komentar
