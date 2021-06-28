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

Route::get('/user/register', function() {
    return view('user/register');
});

Route::get('/user/login', function() {
    return view('user/login');
});

Route::get('/user', function() {
    return view('user/index');
});

Route::get('/user/changepassword', function() {
    return view('user/password');
});

Route::get('/karyawan/login', function() {
    return view('karyawan/login');
});

Route::get('/menu', function() {
    return view('karyawan/listmenu');
});

Route::get('/editmenu', function() {
    return view('karyawan/managemenu');
});

Route::get('/karyawan', function() {
    return view('karyawan/managekaryawan');
});

Route::get('/transaksi', function() {
    return view('karyawan/penjualan');
});

Route::get('/reservasi', function() {
    return view('reservasi/index');
});

Route::get('/reservasi/kode', function() {
    return view('reservasi/kodereservasi');
});

Route::get('/reservasi/edit', function() {
    return view('reservasi/meja');
});

Route::get('/reservasi/pembayaran', function() {
    return view('reservasi/pembayaran');
});

Route::get('/user/berhasil', function() {
    return view('user/berhasil');
});

Route::post('/user/login/cek','UserController@checkLogin');