<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Auth::routes();

Route::resource('/Jabatan', 'JabatanController');
Route::resource('/Golongan', 'GolonganController');
Route::resource('/Kategorilembur', 'KategoriLemburController');
Route::resource('/Pegawai', 'PegawaiController');
Route::resource('/ShowPegawai', 'ShowPegawaiController');
Route::resource('/Lemburpegawai', 'LemburPegawaiController');
Route::resource('/Tunjangan', 'TunjanganController');
Route::resource('/Tunjanganpegawai', 'TunjanganPegawaiController');
Route::resource('/Penggajian', 'PenggajianController');
Route::resource('/Showpenggajian', 'ShowPenggajianController');





