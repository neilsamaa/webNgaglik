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

Route::get('/', 'PagesController@home');
Route::get('/profil', 'PagesController@profil');
Route::get('/berita', 'PagesController@berita');
Route::get('/kontak', 'PagesController@kontak');
Route::get('/agenda', 'PagesController@agenda');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/sejarah', 'PagesController@sejarah');
Route::get('/visimisi', 'PagesController@visimisi');
Route::get('/artilambang', 'PagesController@artilambang');
Route::get('/wilayah', 'PagesController@wilayah');
Route::get('/struktur', 'PagesController@struktur');
Route::get('/dasarhukum', 'PagesController@dasarhukum');
Route::get('/layanan', 'PagesController@layanan');
Route::get('/layanan-administrasi', 'PagesController@layanan_administrasi');
Route::get('/aparatur', 'PagesController@aparatur');
Route::get('/pengumuman', 'PagesController@pengumuman');

Route::get('/data/data', 'PagesController@data');
Route::get('/data/fasilitas-sosial', 'PagesController@fasilitas_sosial');
Route::get('/data/fasilitas-umum', 'PagesController@fasilitas_umum');
Route::get('/data/fasilitas-ekonomi', 'PagesController@fasilitas_ekonomi');
Route::get('/data/fasilitas-khusus', 'PagesController@fasilitas_khusus');
Route::get('/data/bank-sampah', 'PagesController@bank_sampah');
Route::get('/data/tempat-wisata', 'PagesController@tempat_wisata');
Route::get('/data/poskamling', 'PagesController@poskamling');

Route::get('/lembaga/lpmk', 'PagesController@lpmk');
Route::get('/lembaga/pkk', 'PagesController@pkk');
Route::get('/lembaga/kim', 'PagesController@kim');