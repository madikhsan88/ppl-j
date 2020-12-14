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
Route::get('/pengawas', 'UserController@pengawas');
Route::post('/karyawan/create', 'UserController@create');
Route::get('/karyawan/{id}/edit', 'UserController@edit');
Route::post('/karyawan/{id}/update', 'UserController@update');
Route::get('/karyawan/{id}/delete', 'UserController@delete');
Route::post('/pengawas/create', 'UserController@addPengawas');
Route::post('/pengawas/{id}/update', 'UserController@updatePengawas');
Route::get('/pengawas/{id}/delete', 'UserController@deletePengawas');
Route::get('/pengawas/{id}/edit', 'UserController@editPengawas');
Route::get('/profile', 'UserController@show');
Route::get('/absen', 'AbsenController@index');
Route::get('/profile/{id}/edit', 'UserController@editProfile');
Route::post('/profile/{id}/update', 'UserController@updateProfile');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::post('/peminjaman/create', 'PeminjamanController@create');
Route::get('/peminjaman/{id}/delete', 'PeminjamanController@destroy');
Route::get('/peminjaman/detail', 'PeminjamanController@show');


Route::get('getJadwal/{id}', 'JadwalController@getJadwal');

Auth::routes();

Route::get('/absensi', 'AbsenController@index');
Route::get('StatusAbsenDiterima/{id}', 'AbsenController@StatusDiterima');
Route::get('StatusAbsenDitolak/{id}', 'AbsenController@StatusDitolak');
Route::post('/absen', 'AbsenController@absen');
Route::get('/verife', 'AbsenController@show');
Route::get('/pendapatan', 'pendapatanController@index');
