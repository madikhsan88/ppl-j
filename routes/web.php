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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/jadwal', 'JadwalController@index');
Route::post('/jadwal/edit/{id}', 'JadwalController@edit');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/karyawan', 'UserController@index');
<<<<<<< HEAD
=======
Route::get('/pengawas', 'UserController@pengawas');
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
Route::post('/karyawan/create', 'UserController@create');
Route::get('/karyawan/{id}/edit', 'UserController@edit');
Route::post('/karyawan/{id}/update', 'UserController@update');
Route::get('/karyawan/{id}/delete', 'UserController@delete');
<<<<<<< HEAD
=======
Route::post('/pengawas/create', 'UserController@addPengawas');
Route::post('/pengawas/{id}/update', 'UserController@updatePengawas');
Route::get('/pengawas/{id}/delete', 'UserController@deletePengawas');
Route::get('/pengawas/{id}/edit', 'UserController@editPengawas');
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
Route::get('/profile', 'UserController@show');
Route::get('/absen', 'AbsenController@index');
Route::get('/profile/{id}/edit', 'UserController@editProfile');
Route::post('/profile/{id}/update', 'UserController@updateProfile');
<<<<<<< HEAD
=======
Route::get('/peminjaman', 'PeminjamanController@index');
Route::post('/peminjaman/create', 'PeminjamanController@create');
Route::get('/peminjaman/{id}/delete', 'PeminjamanController@destroy');
Route::get('/peminjaman/detail', 'PeminjamanController@show');


>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
Route::get('getJadwal/{id}', 'JadwalController@getJadwal');

Auth::routes();

Route::get('/absensi', 'AbsenController@index');
Route::get('StatusAbsenDiterima/{id}', 'AbsenController@StatusDiterima');
Route::get('StatusAbsenDitolak/{id}', 'AbsenController@StatusDitolak');
Route::post('/absen', 'AbsenController@absen');
Route::get('/verife', 'AbsenController@show');
Route::get('/pendapatan', 'pendapatanController@index');
<<<<<<< HEAD
Route::get('/laporan','LaporanController@index');
Route::post('/laporan/create','LaporanController@store');
Route::get('/laporan/{id}/edit', 'LaporanController@edit');
Route::post('/laporan/{id}/update', 'LaporanController@update');
Route::get('/pendapatan/{id}/edit', 'PendapatanController@edit');
Route::post('/pendapatan/{id}/update', 'PendapatanController@update');
Route::get('/password', 'UserController@password');
Route::post('/ganti-password', 'UserController@ganti_password');
Route::get('/gaji/{id}/delete', 'AbsenController@destroy');
Route::resource('pengumuman', 'PengumumanController');

=======
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
