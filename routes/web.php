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
    return view('master');
});

Route::group(['prefix'=>"buku"],function(){
    Route::get('form/add', 'BukuController@addForm');
    Route::get('form/update', 'BukuController@updateForm');
    Route::get('form/delete', 'BukuController@deleteForm');
});

Route::post('buku/form/b1', 'BukuController@addBuku');
Route::put('buku/form/b2', 'BukuController@updateBuku');
Route::get('b3', 'BukuController@getBuku');
Route::delete('buku/form/b4', 'BukuController@deleteBuku');


Route::group(['prefix'=>"penulis"],function(){
    Route::get('form/add', 'PenulisController@addForm');
    Route::get('form/update', 'PenulisController@updateForm');
    Route::get('form/delete', 'PenulisController@deleteForm');
});

Route::post('penulis/form/p1', 'PenulisController@addPenulis');
Route::put('penulis/form/p2', 'PenulisController@updatePenulis');
Route::get('p3', 'PenulisController@getPenulis');
Route::delete('penulis/form/p4', 'PenulisController@deletePenulis');

Route::group(['prefix'=>"kategori"],function(){
    Route::get('form/add', 'KategoriController@addForm');
    Route::get('form/update', 'KategoriController@updateForm');
    Route::get('form/delete', 'KategoriController@deleteForm');
});

Route::post('kategori/form/k1', 'KategoriController@addKategori');
Route::put('kategori/form/k2', 'KategoriController@updateKategori');
Route::get('k3', 'KategoriController@getKategori');
Route::delete('kategori/form/k4', 'KategoriController@deleteKategori');


Route::get('table/penulis', 'JoinTableController@getPenulis');
Route::get('table/kategori', 'JoinTableController@getKategori');
Route::get('table/penulis/v1', 'JoinTableController@tablePenulis');
Route::get('table/kategori/v2', 'JoinTableController@tableKategori');
