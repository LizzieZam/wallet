<?php

use Illuminate\Http\Request;
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE');
header('Access-Control-Allow-Headers:Content-Type,X-Auth-Token,Origin,Authorization');
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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('restaurante','restauranteController@index');
Route::post('restaurante','restauranteController@store');
Route::get('pedido','pedidoController@index');
Route::post('pedido','pedidoController@store');
Route::get('plato','platoController@index');
Route::post('plato','platoController@store');
Route::get('juego','juegoController@index');
Route::post('juego','juegoController@store');
