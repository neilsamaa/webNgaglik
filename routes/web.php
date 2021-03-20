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
Route::get('/kelembagaan', 'PagesController@kelembagaan');
Route::get('/data', 'PagesController@data');
Route::get('/kontak', 'PagesController@kontak');
Route::get('/agenda', 'PagesController@agenda');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/sejarah', 'PagesController@sejarah');
Route::get('/visimisi', 'PagesController@visimisi');
Route::get('/artilambang', 'PagesController@artilambang');
Route::get('/wilayah', 'PagesController@wilayah');
Route::get('/struktur', 'PagesController@struktur');
Route::get('/dasarhukum', 'PagesController@dasarhukum');