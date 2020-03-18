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

Auth::routes();

Route::get('/buku','BukuController@index');
Route::post('/buku/create','BukuController@create');
Route::get('/buku/{id}/edit','BukuController@edit');
Route::post('/buku/{id}/update','BukuController@update');
Route::get('/buku/{id}/delete','BukuController@delete');
Route::get('/buku/{id}/detail','BukuController@detail');