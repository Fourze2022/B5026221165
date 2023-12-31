<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('w1', function () {
    return view('w1');
});

Route::get('w2', function () {
    return view('w2');
});

Route::get('w3', function () {
    return view('w3');
});

Route::get('w4', function () {
    return view('w4');
});

Route::get('w5', function () {
    return view('w5');
});

Route::get('w6', function () {
    return view('w6');
});

Route::get('w7', function () {
    return view('w7');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

//Route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//Route CRUD Latihan Soal Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahnilaikuliah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//Route CRUD Latihan Soal Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{ID}','App\Http\Controllers\KeranjangController@batal');

//Route CRUD Tugas PraEAS (VGA)
Route::get('/vga','App\Http\Controllers\VGAController@index');
Route::get('/vga/tambah','App\Http\Controllers\VGAController@tambah');
Route::post('/vga/store','App\Http\Controllers\VGAController@store');
Route::get('/vga/edit/{kodevga}','App\Http\Controllers\VGAController@edit');
Route::post('/vga/update','App\Http\Controllers\VGAController@update');
Route::get('/vga/view/{kodevga}','App\Http\Controllers\VGAController@view');
Route::get('/vga/hapus/{kodevga}','App\Http\Controllers\VGAController@hapus');
Route::get('/vga/cari','App\Http\Controllers\VGAController@cari');

//Route CRUD EAS Kode Soal CC (Kategori)
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::post('/kategori/pilih','App\Http\Controllers\KategoriController@pilih');

