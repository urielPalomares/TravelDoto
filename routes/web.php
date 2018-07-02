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

//Listado
Route::get('/listado', 'GeneralController@list');

//Cotizador
Route::get('/cotizador', 'CotizadorController@index');

//Importar Vuelos
Route::get('/importar_vuelos', 'ImportarController@import_vuelo');
Route::post('cargar_datos_vuelo', 'ImportarController@cargar_datos_vuelo');

//Importar Hoteles
Route::get('/importar_hoteles', 'ImportarController@import_hotel');
Route::post('cargar_datos_hotel', 'ImportarController@cargar_datos_hotel');

