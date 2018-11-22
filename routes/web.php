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
    return redirect('/login');
});

// Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');


$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index');
//-----------------------------------Planeamiento------------------------------//
//Bombas
Route::get('/Planeamiento', 'BombaController@index');
Route::get('/Planeamiento/BombaSumergible', 'BombaController@index');
Route::get('/Planeamiento/BombaSumergible/Registrar', 'BombaController@create');
Route::post('/Planeamiento/BombaSumergible/Guardar', 'BombaController@store');
Route::get('/Planeamiento/BombaSumergible/{idbomba}/EditarBomba', 'BombaController@edit');
Route::post('/Planeamiento/BombaSumergible/{idbomba}/Actualizar', 'BombaController@update');
Route::get('/Planeamiento/BombaSumergible/{idbomba}/Eliminar', 'BombaController@destroy');
//Ventilador
Route::get('/Planeamiento/VentiladorAxial', 'VentiladorController@index');
Route::get('/Planeamiento/VentiladorAxial/Registrar', 'VentiladorController@create');
Route::post('/Planeamiento/VentiladorAxial/Guardar', 'VentiladorController@store');
Route::get('/Planeamiento/VentiladorAxial/{idventilador}/EditarVentilador', 'VentiladorController@edit');
Route::post('/Planeamiento/VentiladorAxial/{idventilador}/Actualizar', 'VentiladorController@update');
Route::get('/Planeamiento/VentiladorAxial/{idventilador}/Eliminar', 'VentiladorController@destroy');
//Tablero
Route::get('/Planeamiento/Tablero', 'TableroController@index');
Route::get('/Planeamiento/Tablero/Registrar', 'TableroController@create');
Route::post('/Planeamiento/Tablero/Guardar', 'TableroController@store');
Route::get('/Planeamiento/Tablero/{idtablero}/EditarTablero', 'TableroController@edit');
Route::post('/Planeamiento/Tablero/{idtablero}/Actualizar', 'TableroController@update');
Route::get('/Planeamiento/Tablero/{idtablero}/Eliminar', 'TableroController@destroy');
//-------------------------------------------Alquiler--------------------------------------//
Route::get('/Alquiler', 'CotizacionController@index');


//-------------------------------------------Cliente--------------------------------------//
Route::get('/Cliente', 'ClienteController@index');
Route::get('/Cliente/Registrar', 'ClienteController@create');
Route::post('/Cliente/Guardar', 'ClienteController@store');
Route::get('/Cliente/{idcliente}/EditarCliente', 'ClienteController@edit');
Route::post('/Cliente/{idcliente}/Actualizar', 'ClienteController@update');
Route::get('/Cliente/{idcliente}/Eliminar', 'ClienteController@destroy');



