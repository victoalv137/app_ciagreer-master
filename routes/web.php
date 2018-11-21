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
//Ventilador
Route::get('/Planeamiento/VentiladorAxial', 'VentiladorController@index');
Route::get('/Planeamiento/VentiladorAxial/Registrar', 'VentiladorController@create');
//Tablero
Route::get('/Planeamiento/Tablero', 'TableroController@index');
Route::get('/Planeamiento/Tablero/Registrar', 'TableroController@create');

