<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Cotizador
Route::get('/listado', 'api\ListadoController@index');
Route::get('/listado_cotizaciones', 'api\ListadoController@getCotizaciones');
Route::post('/postCotizacion', 'api\ListadoController@postCotizacion');
Route::get('/cotizacionDetails/{id}', 'api\ListadoController@getCotizacionDetails');