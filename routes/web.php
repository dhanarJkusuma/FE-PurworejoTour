<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/konten/test','KontenController@test');
Route::get('/',['as' => 'PengunjungAwal','uses' => 'PengunjungController@index']);
Route::get('/logout','AdminController@logout');
Route::get('/detail',function(){
	return view('pengunjung.single_detail_layout');
});
Route::get('/detail/{permalink}',['as' => 'DetailKonten','uses' => 'PengunjungController@detail']);
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/wisata','AdminController@tampil_objek_wisata');
Route::get('/wisata/tambah',['as' => 'TampilanTambahKonten', 'uses' => 'KontenController@tampilan_tambah']);
Route::post('/wisata/tambah',['as' => 'ProsesTambahKonten', 'uses' => 'KontenController@proses_tambah']);
Route::get('/wisata/lihat',['as' => 'LihatKonten','uses' => 'KontenController@lihat_konten']);
Route::get('/wisata/lihat/json',['as' => 'JsonKonten','uses' => 'KontenController@ambil_json']);
Route::get('/wisata/ubah/{id}',['as' => 'TampilanUbahKonten', 'uses' => 'KontenController@tampilan_ubah']);
Route::post('/wisata/ubah/{id}',['as' => 'ProsesUbahKonten', 'uses' => 'KontenController@proses_ubah']);
Route::post('/wisata/hapus',['as' => 'HapusKonten','uses' => 'KontenController@hapus']);
Route::get('/wisata/detil/{id}', ['as' => 'DetilKonten', 'uses' => 'KontenController@detil_konten']);
Route::get('/wisata/galeri/{id}/tambah',['as' => 'TampilanTambahGaleri' , 'uses' => 'GaleriController@tampilan_tambah']);
Route::get('/wisata/galeri/{id}/tambah/galeri',['as' => 'TampilanTambahGaleri' , 'uses' => 'GaleriController@tampilan_tambah']);
Route::post('/wisata/galeri/{id}/tambah',['as' => 'ProsesTambahGaleri' , 'uses' => 'GaleriController@tambah_galeri']);
Route::get('/wisata/galeri/{id}/ubah','GaleriController@tampilan_ubah');
Route::get('/wisata/galeri/{id}/lihat',['as' => 'LihatGaleri', 'uses' => 'GaleriController@ambil_galeri']);
Route::post('/wisata/galeri/hapus/',['as' => 'HapusGaleri', 'uses' => 'GaleriController@hapus_galeri']);

//Desa Route
Route::get('/dashboard/desa/tambah', ['as' => 'tambahDesa', 'uses' => 'DesaController@insertView']);
Route::post('/dashboard/desa/tambah', ['as' => 'pTambahDesa','uses' => 'DesaController@insert']);
Route::get('/dashboard/desa/lihat', ['as' => 'lihatDesa', 'uses' => 'DesaController@index']);
Route::get('/dashboard/desa/lihat/json', ['as' => 'jsonDesa', 'uses' => 'DesaController@getJson']);
Route::get('/dashboard/desa/ubah/{id}', ['as' => 'ubahDesa', 'uses' => 'DesaController@updateView']);
Route::post('/dashboard/desa/ubah/{id}', ['as' => 'pUbahDesa', 'uses' => 'DesaController@update']);
Route::post('/dashboard/desa/destroy', ['as' => 'hapusDesa', 'uses' => 'DesaController@destroy']);
//End Desa Route

//Penginapan Route
Route::get('/dashboard/penginapan/tambah', ['as' => 'tambahPenginapan', 'uses' => 'PenginapanController@insertView']);

