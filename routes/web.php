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
    return view('index');
});

Route::get('/produtos', 'ControladorProduto@indexView')->name("produtos.indexview");
Route::get('/categorias', 'ControladorCategoria@index')->name("categorias.index");
Route::get('/categorias/novo', 'ControladorCategoria@create')->name("categorias.create");
Route::post('/categorias', 'ControladorCategoria@store')->name("categorias.store");
Route::get('categorias/apagar/{id}', 'ControladorCategoria@destroy')->name('categorias.apagar');
Route::get('categorias/editar/{id}', 'ControladorCategoria@edit')->name('categorias.editar');
Route::post('/categorias/{id}', 'ControladorCategoria@update')->name("categorias.update");