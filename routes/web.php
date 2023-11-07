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