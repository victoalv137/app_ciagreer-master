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
//Repuesto
Route::get('/Planeamiento/Repuesto', 'RepuestoController@index');
Route::get('/Planeamiento/Repuesto/Registrar', 'RepuestoController@create');
Route::post('/Planeamiento/Repuesto/Guardar', 'RepuestoController@store');
Route::get('/Planeamiento/Repuesto/{idrepuesto}/EditarRepuesto', 'RepuestoController@edit');
Route::post('/Planeamiento/Repuesto/{idrepuesto}/Actualizar', 'RepuestoController@update');
Route::get('/Planeamiento/Repuesto/{idrepuesto}/Eliminar', 'RepuestoController@destroy');
//-------------------------------------------Cotizacion--------------------------------------//
Route::get('/AlquilerVenta', 'CotizacionController@index');
Route::get('/AlquilerVenta/Cotizacion', 'CotizacionController@index');
Route::get('/AlquilerVenta/Cotizacion/CrearCotizacion', 'CotizacionController@create');
Route::post('/AlquilerVenta/Cotizacion/Guardar', 'CotizacionController@store');
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/EditarCotizacion', 'CotizacionController@edit');
Route::post('/AlquilerVenta/Cotizacion/{idcotizacion}/Actualizar', 'CotizacionController@update');
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/Eliminar', 'CotizacionController@destroy');
//-------------------------------------------Alquiler--------------------------------------//
Route::get('/AlquilerVenta/Alquiler', 'AlquilerController@index');
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/Alquilar', 'AlquilerController@create');
Route::post('/AlquilerVenta/Cotizacion/{idcotizacion}/Alquiler/Guardar', 'AlquilerController@store');
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/Alquiler/{idalquiler}/EditarAlquiler', 'AlquilerController@edit');
Route::post('/AlquilerVenta/Cotizacion/{idcotizacion}/Alquiler/{idalquiler}/ActualizarAlquiler', 'AlquilerController@update');
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/Alquiler/{idalquiler}/EliminarAlquiler', 'AlquilerController@destroy');


//-------------------------------------------Ventas--------------------------------------//
Route::get('/AlquilerVenta/Ventas', 'VentasController@index');
Route::get('/AlquilerVenta/Ventas/CrearVenta', 'VentasController@create');
Route::post('/AlquilerVenta/Ventas/Guardar', 'VentasController@store');
Route::get('/AlquilerVenta/Ventas/CrearVenta/{idventa}/Productos', 'VentasController@show');
Route::get('/AlquilerVenta/Ventas/{idventa}/Imprimir', 'VentasController@imprimirVenta');
Route::post('/AlquilerVenta/Ventas/CrearVenta/{idventa}/Productos', 'VentasController@guardarDventa');
Route::get('/AlquilerVenta/Ventas/CrearVenta/{idventa}/Productos/{iddventa}/Eliminar', 'VentasController@EliminarDventa');
Route::get('/AlquilerVenta/Ventas/CrearVenta/{idventa}/Productos/Eliminar', 'VentasController@EliminarVenta');
Route::get('/AlquilerVenta/Ventas/{idventa}/Eliminar','VentasController@EliminarVenta'); 
//Reporte
Route::get('/AlquilerVenta/Cotizacion/{idcotizacion}/Imprimir', 'CotizacionController@imprimir');
//-------------------------------------------Cliente--------------------------------------//
Route::get('/Cliente', 'ClienteController@index');
Route::get('/Cliente/Registrar', 'ClienteController@create');
Route::post('/Cliente/Guardar', 'ClienteController@store');
Route::get('/Cliente/{idcliente}/EditarCliente', 'ClienteController@edit');
Route::post('/Cliente/{idcliente}/Actualizar', 'ClienteController@update');
Route::get('/Cliente/{idcliente}/Eliminar', 'ClienteController@destroy');
//-------------------------------------------Empleado--------------------------------------//
Route::get('/RecursosHumanos/Empleados', 'RecursosController@indexEmpleado');
Route::get('/RecursosHumanos/RegistrarEmpleado', 'RecursosController@createEmpleado');
Route::post('/RecursosHumanos/Empleado/Guardar', 'RecursosController@storeEmpleado');
Route::get('/RecursosHumanos/Empleado/{idempleado}/EditarEmpleado', 'RecursosController@editarEmpleado');
Route::post('/RecursosHumanos/Empleado/{idempleado}/Actualizar', 'RecursosController@actualizarEmpleado');
Route::get('/RecursosHumanos/Empleado/{idempleado}/EliminarEmpleado', 'RecursosController@eliminarEmpleado');
//-------------------------------------------Capacitacion--------------------------------------//
Route::get('/RecursosHumanos/Capacitacion', 'RecursosController@indexCapacitacion');
Route::get('/RecursosHumanos/Capacitacion/{idcapacitacion}/Imprimir', 'RecursosController@ImprimirCapacitacion');
Route::get('/RecursosHumanos/Capacitacion/RegistrarCapacitacion', 'RecursosController@createCapacitacion');
Route::get('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/{idcapacitacion}/Participantes', 'RecursosController@VerParticipantes');
Route::post('/RecursosHumanos/Capacitacion/Guardar', 'RecursosController@storeCapacitacion');
Route::post('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/{idcapacitacion}/Participantes', 'RecursosController@Participantes');
Route::get('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/{idcapacitacion}/Participantes/{iddetallecapacitacion}/Eliminar', 'RecursosController@EliminarParticipante');
Route::get('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/{idcapacitacion}/Participantes/EliminarCapacitacion', 'RecursosController@EliminarCapacitacion');
Route::get('/RecursosHumanos/Capacitacion/{idcapacitacion}/EliminarCapacitacion', 'RecursosController@EliminarCapacitacion');
Route::get('/RecursosHumanos/Capacitacion/{idcapacitacion}/EditarCapacitacion', 'RecursosController@editarCapacitacion');
Route::post('/RecursosHumanos/Capacitacion/{idcapacitacion}/Actualizar', 'RecursosController@actualizarCapacitacion');
Route::post('/RecursosHumanos/Capacitacion/{idcapacitacion}/EditarCapacitacion/Participantes', 'RecursosController@Participantes');
//-------------------------------------------Area--------------------------------------//
Route::get('/RecursosHumanos/Areas', 'RecursosController@indexArea');
Route::get('/RecursosHumanos/Areas/RegistrarArea', 'RecursosController@createArea');
Route::post('/RecursosHumanos/Areas/Guardar', 'RecursosController@storeArea');
Route::get('/RecursosHumanos/Areas/{idarea}/EditarArea', 'RecursosController@editarArea');
Route::post('/RecursosHumanos/Areas/{idarea}/Actualizar', 'RecursosController@actualizarArea');
Route::get('/RecursosHumanos/Areas/{idarea}/EliminarArea', 'RecursosController@eliminarArea');



