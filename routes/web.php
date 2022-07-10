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
});

Route::get('/test', 'HalLaporanController@testPak');

// ========================================== SISTEM LOGIN =========================================
Route::get('/registrasi', 'SistemLoginController@halamanregistrasi');
Route::post('/registrasi_awal', 'SistemLoginController@registrasiAwal');
Route::get('/login', 'SistemLoginController@halamanLogin')->name('login');
Route::post('/login_verifikasi', 'SistemLoginController@verifikasiLogin');
Route::get('/logout', 'SistemLoginController@prosesLogout');
// =================================================================================================

// =============================== AKSES ADMIN, USER ===============================
Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
// => Fitur Cari Halaman
	Route::get('/cari_halaman/{kata}', 'FiturCariController@cariHalaman');
// => Halaman Dashboard
	Route::get('/dashboard', 'HalDashboardController@halamanDashboard');
	Route::post('/simpan_pak', 'HalDashboardController@simpanPak');
	Route::get('/kelola_pak', 'HalDashboardController@kelolaPak');
	Route::get('/detail_pj/{id}', 'HalDashboardController@detailPak');
	Route::get('/download_pj/{id}', 'HalDashboardController@downloadPak');
	Route::get('/edit_pj/{id}', 'HalDashboardController@editPak');
	Route::post('/update_pj/{id}', 'HalDashboardController@updatePak');
	Route::get('/pdf_laporan_pengajuan/{id}', 'HalLaporanController@pdfPak');

});



