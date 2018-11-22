<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=new Cliente();
        $cliente->nombreComercial = $request->input('nombre');
        $cliente->ruc = $request->input('ruc');
        $cliente->giroNegocio = $request->input('giro');
        $cliente->telefono = $request->input('telefono'); 
        $cliente->direccion = $request->input('direccion'); 
        $cliente->save();
        return redirect('/Cliente');
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
        $cliente = Cliente::find($id);
        return view('cliente.editar')->with(compact('cliente'));
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
        $cliente = Cliente::find($id);            
        $cliente->nombreComercial = $request->input('nombre');
        $cliente->ruc = $request->input('ruc');
        $cliente->giroNegocio = $request->input('giro');
        $cliente->telefono = $request->input('telefono'); 
        $cliente->direccion = $request->input('direccion'); 
        $cliente->save();
        return redirect('/Cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();        
        return redirect('/Cliente');
    }
}
