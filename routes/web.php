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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('akun', 'Controllerakun')->middleware('auth');

Route::resource('siswa', 'Controllersiswa')->middleware('auth');

Route::resource('guru', 'Controllerguru')->middleware('auth');

Route::resource('wali', 'Controllerwali')->middleware('auth');

Route::resource('sekolah', 'Controllersekolah')->middleware('auth');

Route::resource('kontak', 'Controllerkontak')->middleware('auth');
