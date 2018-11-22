<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tablero;
use App\Producto;

class TableroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablero = Tablero::all();
        return view('planeamiento.tablero.index')->with(compact('tablero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeamiento.tablero.registrar');
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
        $tablero = new Tablero();
        $tablero->marca = $request->input('marcaid');
        $tablero->modelo = $request->input('modelo');
        $producto->save();
        $producto->tablero()->save($tablero);
        return redirect('/Planeamiento/Tablero');
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
        $tablero = Tablero::find($id);
        $producto->tipo ='T';
        return view('planeamiento.tablero.editar')->with(compact('tablero'));
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
        $tablero = Tablero::find($id);
        $tablero->codigo = $request->input('codigo');
        $tablero->costo = $request->input('costo');
        $tablero->marca = $request->input('marcaid');
        $tablero->modelo = $request->input('modelo');
        $tablero->save();
        return redirect('/Planeamiento/Tablero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tablero = Tablero::find($id);
        $tablero->delete();        
        return redirect('/Planeamiento/Tablero');
    }
}
