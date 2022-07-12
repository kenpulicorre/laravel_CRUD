<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//---todos los metodos
//Route::resource('/empleados','App\Http\Controllers\EmpleadoController');
//---fin todos los metodos

// Route::get('/empleadosf',' [App\Http\Controllers\EmpleadoController::class,'index']', function ($id) {

// });
//-----registros por rutas----
Route::get('/empleados','App\Http\Controllers\EmpleadoController@index');

Route::get('/empleados/{id}','App\Http\Controllers\EmpleadoController@show');
//Route::get('/empleados/{nombre}','App\Http\Controllers\EmpleadoController@show'); //pendiente
Route::post('/empleados','App\Http\Controllers\EmpleadoController@store');
Route::put('/empleados/{id}','App\Http\Controllers\EmpleadoController@update');
Route::delete('/empleados/{id}','App\Http\Controllers\EmpleadoController@destroy');



//-----fin registros por rutas----
//-----fregistros por rutas agentes----
Route::get('/agentes','App\Http\Controllers\AgenteController@index');
Route::get('/agentes/{id}','App\Http\Controllers\AgenteController@show');
Route::post('/agentes','App\Http\Controllers\AgenteController@store');
Route::put('/agentes/{id}','App\Http\Controllers\AgenteController@update');
Route::delete('/agentes/{id}','App\Http\Controllers\AgenteController@destroy');
//-----fin registros por rutas agentes----
//-----fregistros por rutas clientes----
 Route::get('/clientes','App\Http\Controllers\ClienteController@index');
Route::get('/clientes/{id}','App\Http\Controllers\ClienteController@show');
Route::post('/clientes','App\Http\Controllers\ClienteController@store');
Route::put('/clientes/{id}','App\Http\Controllers\ClienteController@update');
Route::delete('/clientes/{id}','App\Http\Controllers\ClienteController@destroy');
//-----fin registros por rutas clientes----
//-----fregistros por rutas ciudades----
 Route::get('/ciudades','App\Http\Controllers\CiudadController@index');
Route::get('/ciudades/{id}','App\Http\Controllers\CiudadController@show');
Route::post('/ciudades','App\Http\Controllers\CiudadController@store');
Route::put('/ciudades/{id}','App\Http\Controllers\CiudadController@update');
Route::delete('/ciudades/{id}','App\Http\Controllers\CiudadController@destroy');
//-----fin registros por rutas clientes----
