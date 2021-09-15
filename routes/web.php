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
    return view('welcome');
    //saat direktori awal / jalan maka akan return view welcome
});

Route::get('dashboard', function () {
    return view('dashboard');
    //saat direktori awal / jalan maka akan return view
});
Route::get('data', function () {
    return view('profilkaryawan');
    //saat direktori awal / jalan maka akan return view
});
Route::get('absensi', function () {
    return view('kehadirankaryawan');
});

Route::get('gaji', function () {
    return view('gajikaryawan');
});

Route::get('slip', function () {
    return view('slipgajikaryawan');
});

Route::get('login', function () {
    return view('layouts.login');
});

Route::get('register', function () {
    return view('layouts.register');
});


Route::get('/profilkaryawan', [App\Http\Controllers\karyawanController::class, 'profilkaryawan']);

Route::get('/template','KaryawaController@template');

Route::get('/data','ProfilController@profilkaryawan'); //tampil semua data
Route::get('/data/tambah','ProfilController@tambah'); //arahkan ke tambah.blade.php
Route::post('/data/store','ProfilController@store'); //arahkan ke 
Route::get('/data/edit','ProfilController@edit'); //arahkan ke edit.blade.php
Route::post('/data/update','ProfilController@update'); //arahkan ke 
Route::get('/data/hapus','ProfilController@hapus'); //arahkan ke 
Route::get('/data/cari','ProfilController@cari'); //arahkan ke method cari
Route::get('/data/cetak_pdf', 'ProfilController@cetak_pdf'); //untuk report




Route::get('/gaji','GajiController@gajikaryawan');
Route::get('/gaji/cetak_slip', 'GajiController@cetak_slip'); //untuk report

//routing halaman datamaster
Route::get('/datamaster',[DatamasterController::class,'index']);
