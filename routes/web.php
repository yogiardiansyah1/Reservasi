<?php

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

Route::get('/test', 'ViewController@test');
Route::get('/', 'ViewController@home');

//  KARYAWAN
Route::get('/resto', 'ViewController@resto');
Route::get('/resto/login', 'ViewController@resto_login')->name('login');
Route::get('/resto/logout', 'RestoController@logout')->name('logout');
Route::post('/resto/login/cek', 'RestoController@cek_login');
Route::get('/resto/pembayaran', 'ViewController@resto_pembayaran')->name('pembayaran');
Route::post('/resto/pembayaran/tambah/{id}', 'PembelianController@tambah_item');
Route::get('/resto/penjualan', 'ViewController@resto_penjualan');
Route::get('/resto/karyawan', 'ViewController@resto_karyawan');
Route::post('/resto/pembayaran/bayar', 'PenjualanController@bayar');
Route::get('/resto/pembayaran/hapus/{id}', 'PenjualanController@hapus');

//  RESERVASI
Route::get('/reservasi', 'ViewController@reservasi_index');
Route::get('/reservasi/detail', 'ViewController@reservasi_detail');
Route::post('/reservasi/proses', 'ReservasiController@proses');
Route::post('/reservasi/berhasil', 'ViewController@reservasi_berhasil');


Route::get('/cs', 'ViewController@csv');
Route::get('/xm', 'PenjualanController@createxml');


/*
Route::get('/home', function() {
    return view('home');
});

Route::get('/karyawan/login', function() {
    return view('karyawan/login');
});

Route::post('/karyawan/ceklogin', 'KaryawanController@cekLogin');



Route::get('/karyawan', function() {
    return view('karyawan/edit');
});


Route::get('/reservasi', function() {
    return view('reservasi/index');
});

Route::post('/reservasi/memproses', 'ReservasiController@proses');

Route::get('/reservasi/sukses', function() {
    return view('reservasi/sukses');
});

Route::get('/menu', 'MenuController@getAllMenu');

Route::get('/menu/edit', function() {
    return view('penjualan/edit');
});

Route::get('/transaksi', function() {
    return view('penjualan/riwayat');
});

 Route::get('/test', 'ReservasiController@getSisaKursi');
<<<<<<< HEAD
 */
