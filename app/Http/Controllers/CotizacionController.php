<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Producto;
use App\Cotizacion;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {
        $cotizaciones=Cotizacion::all();
        return view('alquiler.cotizacion.index')->with(compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes= Cliente::all();
        $productos=Producto::all();
        return view('alquiler.cotizacion.registrar')->with(compact('clientes','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cotizacion= new Cotizacion();
        $cotizacion->codigo = $request->input('codigo');
        $cotizacion->validez = $request->input('validez');
        $cotizacion->pago = $request->input('pago');
        $cotizacion->cliente_id = $request->input('cliente');
        $cotizacion->producto_id = $request->input('producto');
        $cotizacion->save();
        return redirect('/AlquilerVenta/Cotizacion');

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
        $cotizacion = Cotizacion::find($id);
        $clientes = $cotizacion->cliente;
        $productos = $cotizacion->producto;
        return view('alquiler.cotizacion.editar')->with(compact('cotizacion','clientes','productos'));
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
        $cotizacion= Cotizacion::find($id);
        $cotizacion->codigo = $request->input('codigo');
        $cotizacion->validez = $request->input('validez');
        $cotizacion->pago = $request->input('pago');
        $cotizacion->cliente_id = $request->input('cliente');
        $cotizacion->producto_id = $request->input('producto');
        $cotizacion->save();
        return redirect('/AlquilerVenta/Cotizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cotizacion = Cotizacion::find($id);
        $cotizacion->delete();        
        return redirect('/AlquilerVenta/Cotizacion');
    }


    public function imprimir($id)
    {
        $cotizacion = Cotizacion::find($id);
        $cliente = $cotizacion->cliente;
        $producto = $cotizacion->producto;
        if ($producto->tipo=='B') {
            $bomba=$producto->bomba;
            return view('alquiler.reporte.imprimir-cotizacion-b')->with(compact('cotizacion','cliente','producto'));
        }else{
            if ($producto->tipo=='T'){
            $tablero=$producto->tablero;
            return view('alquiler.reporte.imprimir-cotizacion-t')->with(compact('cotizacion','cliente','tablero'));
            }
        }

        $ventilador=$producto->ventilador;
        return view('alquiler.reporte.imprimir-cotizacion-v')->with(compact('cotizacion','cliente','ventilador'));
    }
}
