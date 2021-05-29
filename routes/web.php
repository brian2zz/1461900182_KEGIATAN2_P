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
    return view('home0182');
});

Route::get('buku', 'App\Http\Controllers\Controller0182@buku')->name('buku');
Route::get('kategori', 'App\Http\Controllers\Controller0182@kategori')->name('kategori');
Route::get('buku/kategori', 'App\Http\Controllers\Controller0182@kategori')->name('kategori'); 
Route::get('peminjam', 'App\Http\Controllers\Controller0182@peminjam')->name('peminjam');
Route::get('petugas', 'App\Http\Controllers\Controller0182@petugas')->name('petugas');
Route::get('laporan', 'App\Http\Controllers\Controller0182@laporan')->name('laporan');
Route::get('laporan/denda', 'App\Http\Controllers\Controller0182@denda')->name('denda');
