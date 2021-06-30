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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

/**
 *          KARYAWAN
 */
Route::get('/karyawan/login', function() {
    return view('karyawan/login');
});

Route::get('/menu', function() {
    return view('karyawan/listmenu');
});

Route::get('/menu/edit', function() {
    return view('karyawan/managemenu');
});

Route::get('/karyawan', function() {
    return view('karyawan/managekaryawan');
});


Route::get('/transaksi', function() {
    return view('karyawan/penjualan');
});

/**
 *          RESERVASI
 */
Route::get('/reservasi', function() {
    return view('reservasi.index');
});

Route::post('/reservasi/memproses', 'ReservasiController@proses');

Route::get('/reservasi/sukses', function() {
    return view('reservasi/sukses');
});

/**
 *          PENJUALAN
 */

 Route::get('/test', 'ReservasiController@getSisaKursi');