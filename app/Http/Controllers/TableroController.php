<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tablero;

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
        $tablero = new Tablero();
        $tablero->codigo = $request->input('codigo');
        $tablero->costo = $request->input('costo');
        $tablero->marca = $request->input('marcaid');
        $tablero->modelo = $request->input('modelo');
        $tablero->save();
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
