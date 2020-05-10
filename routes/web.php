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

Route::get('/produtos', 'ControladorProduto@index')->name("produtos.index");
Route::get('/categorias', 'ControladorCategoria@index')->name("categorias.index");
Route::get('/categorias/novo', 'ControladorCategoria@create')->name("categorias.create");
Route::post('/categorias', 'ControladorCategoria@store')->name("categorias.store");

Route::get('/1', function () {
    return view('index');
})->name('categorias.editar');

Route::get('/2', function () {
    return view('index');
})->name('categorias.apagar');