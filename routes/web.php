<?php
use App\Kategori;
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

Route::get('/test', function () {
    $soal = Kategori::find(1);
    return $soal->soal;
});

Route::get('/dash', 'HomeController@index')->name('dash');
Route::get('/alumni/profil', 'Alumni\ProfilController@index');
Route::get('/alumni/agenda', 'Alumni\BeritaController@index');
Route::get('/alumni/lowker', 'Alumni\LowkerController@index');
Route::get('/alumni/agenda/create', 'Alumni\BeritaController@create');
Route::post('/alumni/agenda', 'Alumni\BeritaController@store');
Route::get('/alumni/lowker/create', 'Alumni\LowkerController@create');
Route::post('/alumni/lowker', 'Alumni\LowkerController@store');
Route::get('/alumni/soal', 'Alumni\SoalController@index');
// Route::get('/alumni/soal/identitas_pribadi', 'Alumni\SoalController@indexIdentitasPribadi');
// Route::post('/alumni/soal/identitas_pribadi', 'Alumni\SoalController@storeIdentitasPribadi');
// Route::get('/alumni/soal/di_isi_telah_bekerja', 'Alumni\SoalController@indexDiIsiTelahBekerja');
// Route::post('/alumni/soal/di_isi_telah_bekerja', 'Alumni\SoalController@storeDiIsiTelahBekerja');
// Route::get('/alumni/soal/wirausaha', 'Alumni\SoalController@indexWirausaha');

Route::get('/alumni/soal/{kategori}', 'Alumni\SoalController@indexSoal');
Route::post('/alumni/soal/{kategori}', 'Alumni\SoalController@storeJawabanSoal');


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