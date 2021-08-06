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

Route::get('/s', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('Auth/login');
});

Route::get('/', function () {
    return view('Admin/master/masteradmin');
});

//kategori
Route::get('kategori', 'kategoriController@index')->name('ktg');
Route::get('tkategori', 'kategoriController@create')->name('tktg');
Route::post('tambahkategori', 'kategoriController@insert');
Route::get('ekategori{id}', 'kategoriController@edit')->name('ektg');
Route::post('updatekategori', 'kategoriController@update')->name('uktg');
Route::get('hkategori{id}', 'kategoriController@hapus')->name('hktg');

//Suplier
Route::get('suplier', 'suplierController@index')->name('sup');
Route::get('tsuplier', 'suplierController@create')->name('tsup');
Route::post('tambahsuplier', 'suplierController@insert');
Route::get('esuplier{id}', 'suplierController@edit')->name('esup');
Route::post('updatesuplier', 'suplierController@update')->name('usup');
Route::get('hsuplier{id}', 'suplierController@hapus')->name('hsup');

//produk
Route::get('produk', 'produkController@index')->name('pro');
Route::get('tproduk', 'produkController@create')->name('tpro');
Route::post('tambahproduk', 'produkController@insert');
Route::get('eproduk{id}', 'produkController@edit')->name('epro');
Route::post('updatproduk', 'produkController@update')->name('upro');
Route::get('hproduk{id}', 'produkController@hapus')->name('hpro');



