<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventilador;
use App\Producto;

class VentiladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventilador = Ventilador::all();
        return view('planeamiento.ventilador.index')->with(compact('ventilador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeamiento.ventilador.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->codigo = $request->input('codigo');
        $producto->costo = $request->input('costo');
        $producto->tipo ='V';
        $ventilador = new Ventilador();
        $ventilador->marca = $request->input('marcaid');
        $ventilador->modelo = $request->input('modelo'); 
        $ventilador->capacidad = $request->input('capacidad');    
        $ventilador->medida = $request->input('medida');           
        $producto->save();
        $producto->ventilador()->save($ventilador);
        return redirect('/Planeamiento/VentiladorAxial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventilador = Ventilador::find($id);
        return view('planeamiento.ventilador.editar')->with(compact('ventilador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ventilador = Ventilador::find($id);
        $ventilador->codigo = $request->input('codigo');
        $ventilador->costo = $request->input('costo');
        $ventilador->marca = $request->input('marcaid');
        $ventilador->modelo = $request->input('modelo'); 
        $ventilador->capacidad = $request->input('capacidad');    
        $ventilador->medida = $request->input('medida');           
        $ventilador->save();
        return redirect('/Planeamiento/VentiladorAxial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ventilador = Ventilador::find($id);
        $ventilador->delete();        
        return redirect('/Planeamiento/VentiladorAxial');
    }
}
