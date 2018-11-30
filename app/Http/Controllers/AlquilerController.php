<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Producto;
use App\Cotizacion;
use App\Alquiler;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('alquiler.movimiento.index')->with(compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cotizacion = Cotizacion::find($id);
        $cliente = $cotizacion->cliente;
        $producto = $cotizacion->producto;       
        return view('alquiler.movimiento.registrar')->with(compact('cotizacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'obra.required' => 'Es necesario ingresar la obra.',
            'tiempo.required' => 'Es necesario el tiempo.',
            'llegada.required' => 'Es necesario ingresar el lugar de llegada.',
            'partida.required' => 'Es necesario ingresar el lugar de partida',
        ];

        $rules = [
            'obra' => 'required',
            'tiempo' => 'required',
            'llegada' => 'required',
            'partida' => 'required',
        ];
        $this->validate($request, $rules, $messages);


        $alquiler= new Alquiler();
        $alquiler->obra = $request->input('obra');
        $alquiler->tiempo = $request->input('tiempo');
        $alquiler->llegada = $request->input('llegada');
        $alquiler->partida = $request->input('partida'); 
        $alquiler->cliente_id = $request->input('codcliente');
        $alquiler->cotizacion_id = $request->input('codcotizacion');
        $alquiler->save();
        return redirect('/AlquilerVenta/Alquiler');
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
        $alquiler=  Alquiler::find($id);
        $cliente = $alquiler->cotizacion->cliente;
        $producto =  $alquiler->cotizacion->producto;  
        return view('alquiler.movimiento.editar')->with(compact('alquiler','cliente','producto'));
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

        $messages = [
            'obra.required' => 'Es necesario ingresar la obra.',
            'tiempo.required' => 'Es necesario el tiempo.',
            'llegada.required' => 'Es necesario ingresar el lugar de llegada.',
            'partida.required' => 'Es necesario ingresar el lugar de partida',
        ];

        $rules = [
            'obra' => 'required',
            'tiempo' => 'required',
            'llegada' => 'required',
            'partida' => 'required',
        ];
        $this->validate($request, $rules, $messages);
        

        $alquiler=  Alquiler::find($id);
        $alquiler->obra = $request->input('obra');
        $alquiler->tiempo = $request->input('tiempo');
        $alquiler->llegada = $request->input('llegada');
        $alquiler->partida = $request->input('partida'); 
        $alquiler->cliente_id = $request->input('codcliente');
        $alquiler->cotizacion_id = $request->input('codcotizacion');
        $alquiler->save();
        return redirect('/AlquilerVenta/Alquiler');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();        
        return redirect('/AlquilerVenta/Alquiler');
    }



}
