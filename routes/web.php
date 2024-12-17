<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\DosenController;

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
    return view('welcome');
});

Route::get('/error', function () {
    return "<h1> Server Error: Ada Kesalahan di Server </h1>";
});


Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/5026221124', function () {return view('5026221124'); })->name('tugas2');
Route::get('/form', function () {return view('form'); })->name('pertemuan4');
Route::get('/hello', function () {return view('hello'); })->name('pertemuan1');
Route::get('/kopken', function () {return view('kopken'); })->name('tugas1');
Route::get('/responsive1', function () {return view('responsive1'); })->name('pertemuan3');
Route::get('/style', function () {return view('style'); })->name('pertemuan2');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/baju', 'App\Http\Controllers\BajuController@index');
Route::get('/baju/tambah', 'App\Http\Controllers\BajuController@tambah');
Route::post('/baju/store','App\Http\Controllers\BajuController@store');
Route::get('/baju/edit/{id}','App\Http\Controllers\BajuController@edit');
Route::post('/baju/update','App\Http\Controllers\BajuController@update');
Route::get('/baju/hapus/{id}','App\Http\Controllers\BajuController@hapus');
Route::get('/baju/cari','App\Http\Controllers\BajuController@cari');

Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah', 'App\Http\Controllers\KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

Route::get('/karyawan1', 'App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan1/tambah', 'App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan1/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan1/hapus/{NIP}','App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan1/hapus/{NIP}', 'App\Http\Controllers\KaryawanController@delete');
