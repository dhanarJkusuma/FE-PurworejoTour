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

Route::get('/logout','AdminController@logout');
Route::get('/detail',function(){
	return view('pengunjung.single_detail_layout');
});
Route::get('/detail/{permalink}',['as' => 'DetailKonten','uses' => 'PengunjungController@detail']);
Auth::routes();

//menu route

//dashboard route
Route::get('/dashboard',['as' => 'index', 'uses' => 'AdminController@dashboard']);
//end dashboard route

//wisata route
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
//end wisata route

//kuliner route
Route::get('/kuliner','AdminController@tampil_objek_kuliner');
Route::get('/kuliner/tambah','KulinerController@tampilan_tambah');
Route::post('/kuliner/tambah','KulinerController@proses_tambah');
Route::get('/kuliner/lihat','KulinerController@lihat_konten');
Route::get('/kuliner/lihat/json','KulinerController@ambil_json');
Route::get('/kuliner/ubah/{id}','KulinerController@tampilan_ubah');
Route::post('/kuliner/ubah/{id}','KulinerController@proses_ubah');
Route::post('/kuliner/hapus','KulinerController@hapus');
Route::get('/kuliner/detil/{id}','KulinerController@detil_konten');
//kuliner route

//Penginapan Route
Route::get('/dashboard/penginapan/tambah', ['as' => 'tambahPenginapan', 'uses' => 'PenginapanController@insertView']);
Route::post('/dashboard/penginapan/tambah', ['as' => 'pTambahPenginapan', 'uses' => 'PenginapanController@insert']);
Route::get('/dashboard/penginapan/lihat', ['as' => 'lihatPenginapan', 'uses' => 'PenginapanController@index']);
Route::get('/dashboard/penginapan/lihat/json', ['as' => 'jsonPenginapan', 'uses' => 'PenginapanController@getJson']);
Route::get('/dashboard/penginapan/ubah/{id}', ['as' => 'ubahPenginapan', 'uses' => 'PenginapanController@updateView']);
Route::post('/dashboard/penginapan/ubah/{id}', ['as' => 'pUbahPenginapan', 'uses' => 'PenginapanController@update']);
Route::get('/dashboard/penginapan/detail/{id}', ['as' => 'detailPenginapan', 'uses' => 'PenginapanController@getDetail']);
Route::post('/dashboard/penginapan/hapus', ['as' => 'hapusPenginapan', 'uses' => 'PenginapanController@destroy']);
Route::post('/dashboard/penginapan/gallery/{id}/delete', ['as' => 'hapusGaleri', 'uses' => 'PenginapanController@destroyGallery']);
Route::get('/dashboard/penginapan/gallery/{id}/tambah', ['as' => 'tambahPenginapanGallery', 'uses' => 'PenginapanController@insertGalleryView'])->where('id', '[0-9]+');;
Route::post('/dashboard/penginapan/gallery/{id}/tambah', ['as' => 'pTambahPenginapanGallery', 'uses' => 'PenginapanController@insertGallery'])->where('id', '[0-9]+');;
Route::get('/dashboard/penginapan/gallery/{id}', ['as' => 'ambilGaleriPenginapan', 'uses' => 'PenginapanController@getGallery']);
//end penginapan route

//Desa Route
Route::get('/dashboard/desa/tambah', ['as' => 'tambahDesa', 'uses' => 'DesaController@insertView']);
Route::post('/dashboard/desa/tambah', ['as' => 'pTambahDesa','uses' => 'DesaController@insert']);
Route::get('/dashboard/desa/lihat', ['as' => 'lihatDesa', 'uses' => 'DesaController@index']);
Route::get('/dashboard/desa/lihat/json', ['as' => 'jsonDesa', 'uses' => 'DesaController@getJson']);
Route::get('/dashboard/desa/ubah/{id}', ['as' => 'ubahDesa', 'uses' => 'DesaController@updateView']);
Route::post('/dashboard/desa/ubah/{id}', ['as' => 'pUbahDesa', 'uses' => 'DesaController@update']);
Route::post('/dashboard/desa/destroy', ['as' => 'hapusDesa', 'uses' => 'DesaController@destroy']);
//End Desa Route

//frond end route
Route::get('/',['as' => 'PengunjungAwal','uses' => 'PengunjungController@index']);
// Route::get('/login','Auth\LoginController@login');
//end frond end route
