<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Cliente;
use App\Repuesto;
use App\Dventa;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $ventas=Venta::all();
        return view('alquiler.ventas.index')->with(compact('ventas','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('alquiler.ventas.create')->with(compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta= new Venta();
        $venta->codigo = $request->input('codigo');       
        $venta->cliente_id = $request->input('cliente');       
        $venta->save();
        return redirect('/AlquilerVenta/Ventas/CrearVenta/'.$venta->id.'/Productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idventa)    
    {
        $venta = Venta::find($idventa);        
        $repuestos =Repuesto::all(); 
        $dventas = $venta->dventa;          
        return view('alquiler.ventas.createp')->with(compact('venta','repuestos','dventas','repuesto2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function guardarDventa(Request $request,$idventa)
    {
        // $empresa = Empresa::find($idempresa);
        // $foda = new Foda();
        // $foda->Descripcion = $request->input('Descripcion');
        // $empresa->fodas()->save($foda);
        // return redirect()->back();
        $venta = Venta::find($idventa);
        $dventa = new Dventa();
        $dventa->repuesto_id = $request->input('repuesto');
        $venta->dventa()->save($dventa);
        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EliminarVenta($idventa)
    {
        $venta = Venta::find($idventa);
        $dventas= $venta->dventa;     
        foreach ($dventas as $dventa) {
            $dventa->delete();
        }      
        $venta->delete();
        return redirect('/AlquilerVenta/Ventas');
    }
    public function EliminarDventa($iddventa)
    {
        $dventa = Dventa::find($iddventa);
        $dventa->delete();        
        return redirect()->back();
    }
    public function imprimirVenta($id)
    {
        $sum=0;
        $venta = Venta::find($id);
        $dventas= $venta->dventa;
        foreach ($dventas as $dventa) {
            
            $sum=$sum+$dventa->repuesto->costo;
        }
        
        return view('alquiler.ventas.imprimir')->with(compact('venta','dventas','sum'));

    }
  
    
}
