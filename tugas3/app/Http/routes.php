=<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna', function(){
		return 'Nama Saya : AwangJordi';
});
route::get('/',function(){
	return view('wellcome');
});
Route::get('pengguna/{pengguna}',function($pengguna){
	return "Hallo World Dari Pengguna $pengguna";
});

Route::get('ruangan/tambah', 'ruanganController@tambah');
Route::get('ruangan','ruanganController@awal');
Route::get('ruangan', function(){
		return 'Ruangan Saya : 1';
});
route::get('/',function(){
	return view('411A');
});
Route::get('ruangan/{ruangan}',function($ruangan){
	return "Hallo World Dari ruangan $ruangan";
});

Route::get('matakuliah/tambah', 'matakuliahController@tambah');
Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah', function(){
		return 'Matakuliah Saya : 1';
});
route::get('/',function(){
	return view('Framework');
});
Route::get('matakuliah/{matakuliah}',function($matakuliah){
	return "Hallo World Dari ruangan $ruangan";
});

Route::get('mahasiswa/tambah', 'mahasiswaController@tambah');
Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa', function(){
		return 'Ruangan Saya : 1';
});
route::get('/',function(){
	return view('411A');
});
Route::get('mahasiswa/{mahasiswa}',function($mahasiswa){
	return "Hallo World Dari ruangan $ruangan";
});

Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah', function(){
		return 'Setiap Hari Jam : 3';
});
route::get('/',function(){
	return view('1');
});
Route::get('jadwal_matakuliah/{jadwal_matakuliah}',function($jadwal_matakuliah){
	return "Hallo World Dari jadwal_matakuliah $jadwal_matakuliah";
});

Route::get('dosen/tambah', 'dosenController@tambah');
Route::get('dosen','dosenController@awal');
Route::get('dosen', function(){
		return 'Dosen Saya : Abbas';
});
route::get('/',function(){
	return view('411A');
});
Route::get('dosen/{dosen}',function($dosen){
	return "Hallo World Dari ruangan $dosen";
});

Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah', function(){
		return 'Ruangan Saya : 2';
});
route::get('/',function(){
	return view('2');
});
Route::get('dosen_matakuliah/{dosen_matakuliah}',function($dosen_matakuliah){
	return "Hallo World Dari ruangan $dosen_matakuliah";
});