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
Route::get('restaurante/{id}','restauranteController@show');
Route::post('restaurante','restauranteController@store');
Route::post('restaurante/{id}','restauranteController@update');
Route::delete('restaurante/{id}','restauranteController@delete');

Route::get('pedido','pedidoController@index');
Route::get('pedido/{id}','pedidoController@show');
Route::post('pedido','pedidoController@store');
Route::post('pedido/{id}','pedidoController@update');
Route::delete('pedido/{id}','pedidoController@delete');

Route::get('plato','platoController@index');
Route::get('plato/{id}','platoController@show');
Route::post('plato','platoController@store');
Route::post('plato/{id}','platoController@update');
Route::delete('plato/{id}','platoController@delete');


Route::get('pago','pagoController@index');
Route::get('pago/{id}','pagoController@show');
Route::post('pago','pagoController@store');
Route::post('pago/{id}','pagoController@update');
Route::delete('pago/{id}','pagoController@delete');