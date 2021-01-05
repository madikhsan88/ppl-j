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
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/jadwal', 'JadwalController@index');
    Route::post('/jadwal/edit/{id}', 'JadwalController@edit');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/karyawan', 'UserController@index');
    Route::post('/karyawan/create', 'UserController@create');
    Route::get('/karyawan/{id}/edit', 'UserController@edit');
    Route::post('/karyawan/{id}/update', 'UserController@update');
    Route::get('/karyawan/{id}/delete', 'UserController@delete');
    Route::get('/profile', 'UserController@show');
    Route::get('/absen', 'AbsenController@index');
    Route::get('/profile/{id}/edit', 'UserController@editProfile');
    Route::post('/profile/{id}/update', 'UserController@updateProfile');
    Route::get('getJadwal/{id}', 'JadwalController@getJadwal');
    Route::get('/absensi', 'AbsenController@index');
    Route::get('StatusAbsenDiterima/{id}', 'AbsenController@StatusDiterima');
    Route::get('StatusAbsenDitolak/{id}', 'AbsenController@StatusDitolak');
    Route::post('/absen', 'AbsenController@absen');
    Route::get('/verife', 'AbsenController@show');
    Route::get('/pendapatan', 'pendapatanController@index');
    Route::get('/laporan', 'LaporanController@index');
    Route::post('/laporan/create', 'LaporanController@store');
    Route::get('/laporan/{id}/edit', 'LaporanController@edit');
    Route::post('/laporan/{id}/update', 'LaporanController@update');
    Route::get('/pendapatan/{id}/edit', 'PendapatanController@edit');
    Route::post('/pendapatan/{id}/update', 'PendapatanController@update');
    Route::get('/password', 'UserController@password');
    Route::post('/ganti-password', 'UserController@ganti_password');
    Route::get('/gaji/{id}/delete', 'AbsenController@destroy');
    Route::resource('pengumuman', 'PengumumanController');
});
