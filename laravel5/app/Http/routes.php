<?php

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
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('Hello oi', function() {
    return 'aello oi';
});
Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosenmatakuliah','dosen_matakuliahController@awal');
Route::get('dosenmatakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('jadwalmatakuliah','jadwal_matakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','jadwal_matakuliahController@tambah');
Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');
Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');