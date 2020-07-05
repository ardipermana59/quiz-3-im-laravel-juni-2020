<?php

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
    return view('index');
});

Route::get('/artikel/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/artikel', 'ItemController@store'); // menyimpan data
Route::get('/artikel', 'ItemController@index'); // menampilkan semua
Route::get('/artikel/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ItemController@destroy'); // menghapus data dengan id

Route::get('/contohuser', 'ItemController@contohuser'); // menghapus data dengan id