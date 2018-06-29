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
    return view('welcome');
});

Route::get('/cotizador', 'CotizadorController@index');


Route::get('/importar', 'ImportarController@index');
Route::post('cargar_datos', 'ImportarController@cargar_datos');
