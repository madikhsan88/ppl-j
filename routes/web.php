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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login','UserController@login')->name('login');
Route::post('/postlogin','UserController@postlogin');
Route::get('/logout','UserController@logout');

Route::group(['middleware' => 'auth'],function(){
Route::get('/user','UserController@index');

});

Route::get('/jadwal','JadwalController@index');
Route::get('/jadwal/{id}/edit','JadwalController@edit');
Route::post('/jadwal/{id}/update','JadwalController@update');
Route::get('/dashboard','DashboardController@index');
Route::get('/karyawan','KaryawanController@index');
Route::post('/karyawan/create','KaryawanController@create');
Route::get('/karyawan/{id}/edit','KaryawanController@edit');
Route::post('/karyawan/{id}/update','KaryawanController@update');
Route::get('/karyawan/{id}/delete','KaryawanController@delete');
Route::get('/profil','KaryawanController@show')->name('profil');
Route::get('/absen','AbsenController@index');
Route::get('/karyawan/{id}/profil', 'KaryawanController@profil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/absen', 'HomeController@absen');

