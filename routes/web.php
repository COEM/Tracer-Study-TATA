<?php

Route::get('/', function () {
    return view('user.index');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/agenda', 'User\AgendaController@index');
Route::get('/agenda/{id}/show', 'User\AgendaController@show');
Route::get('/lowker', 'User\LowkerController@index');
Route::get('/lowker/{id}/show', 'User\LowkerController@show');


Route::get('/kontak', function () {
    return view('user.kontak');
});

Route::get('/dash', 'HomeController@index')->name('dash');
Route::get('/alumni/profil', 'Alumni\ProfilController@index');
Route::get('/alumni/agenda', 'Alumni\BeritaController@index');
Route::get('/alumni/lowker', 'Alumni\LowkerController@index');
Route::get('/alumni/agenda/create', 'Alumni\BeritaController@create');
Route::post('/alumni/agenda', 'Alumni\BeritaController@store');
Route::get('/alumni/lowker/create', 'Alumni\LowkerController@create');
Route::post('/alumni/lowker', 'Alumni\LowkerController@store');

Auth::routes();
Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::resource('/soal', 'Admin\SoalController');
	Route::resource('/berita', 'Admin\BeritaController');
	Route::get('berita/{id}/post','Admin\BeritaController@updatePost');
	Route::resource('/lowker', 'Admin\LowkerController');
	Route::resource('/alumni', 'Admin\AlumniController');
	Route::get('lowker/{id}/post','Admin\LowkerController@updatePost');
});