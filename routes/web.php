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


//page controller
Route::get('/', 'App\Http\Controllers\PagesController@home' );
Route::get('/about', 'App\Http\Controllers\PagesController@about' );

//surat masuk controller
Route::get('/surat_masuk', 'App\Http\Controllers\SuratMasukController@index');
Route::get('/surat_masuk/create', 'App\Http\Controllers\SuratMasukController@create');
Route::get('/surat_masuk/{suratmasuks}', 'App\Http\Controllers\SuratMasukController@show');
Route::post('/surat_masuk', 'App\Http\Controllers\SuratMasukController@store');
Route::delete('/surat_masuk/{suratmasuk}', 'App\Http\Controllers\SuratMasukController@destroy');
Route::get('/surat_masuk/{suratmasuk}/edit', 'App\Http\Controllers\SuratMasukController@edit');
Route::patch('/surat_masuk/{suratmasuk}', 'App\Http\Controllers\SuratMasukController@update');



//surat keluar controller
Route::get('/surat_keluar', 'App\Http\Controllers\SuratKeluarController@index');
Route::get('/surat_keluar/create', 'App\Http\Controllers\SuratKeluarController@create');
Route::get('/surat_keluar/{suratkeluars}', 'App\Http\Controllers\SuratKeluarController@show');
Route::post('/surat_keluar', 'App\Http\Controllers\SuratKeluarController@store');
Route::delete('/surat_keluar/{suratkeluar}', 'App\Http\Controllers\SuratKeluarController@destroy');
Route::get('/surat_keluar/{suratkeluar}/edit', 'App\Http\Controllers\SuratKeluarController@edit');
Route::patch('/surat_keluar/{suratkeluar}', 'App\Http\Controllers\SuratKeluarController@update');


//route ini kadang bisa kadang error, gatau juga kenapa
//mau coba bikin pagenation tapi ngga paham cara pake nya

// Route::resource('barang','App\Http\Controllers\BarangController');
