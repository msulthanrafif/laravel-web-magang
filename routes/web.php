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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi.index');
});

Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
});

Route::get('/pengumuman', function () {
    return view('user.pengumuman');
});

Route::get('/super-admin', function () {
    return view('admin.super-admin');
});

Route::get('/tambah-data-admin', function () {
    return view('admin.tambah-data-admin');
});

Route::get('/update-data-admin', function () {
    return view('admin.update-data-admin');
});

Route::get('/admin-bkd', function () {
    return view('admin.admin-bkd');
});

Route::get('/admin-opd', function () {
    return view('admin.admin-opd');
});
