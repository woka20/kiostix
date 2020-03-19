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
    Route::post('add', 'BukuController@addBuku');
    Route::put('update/{id}', 'BukuController@updateBuku');
    Route::get('get', 'BukuController@getBuku');
    Route::delete('delete/{id}', 'BukuController@deleteBuku');
    Route::get('form/add', 'BukuController@addForm');
    Route::get('form/update', 'BukuController@updateForm');
    Route::get('form/delete', 'BukuController@deleteForm');
});

Route::group(['prefix'=>"penulis"],function(){
    Route::post('add', 'PenulisController@addPenulis');
    Route::put('update/{id}', 'PenulisController@updatePenulis');
    Route::get('get', 'PenulisController@getPenulis');
    Route::delete('delete/{id}', 'PenulisController@deletePenulis');
    Route::get('form/add', 'PenulisController@addForm');
    Route::get('form/update', 'PenulisController@updateForm');
    Route::get('form/delete', 'PenulisController@deleteForm');
});

Route::group(['prefix'=>"kategori"],function(){
    Route::post('add', 'KategoriController@addKategori');
    Route::put('update/{id}', 'KategoriController@updateKategori');
    Route::get('get', 'KategoriController@getKategori');
    Route::delete('delete/{id}', 'KategoriController@deleteKategori');
    Route::get('form/add', 'KategoriController@addForm');
    Route::get('form/update', 'KategoriController@updateForm');
    Route::get('form/delete', 'KategoriController@deleteForm');
});

Route::get('table', 'JoinTableController@tableCoba');
