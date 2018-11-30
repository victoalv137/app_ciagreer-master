<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repuesto;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repuestos = Repuesto::all();
        return view('planeamiento.repuesto.index')->with(compact('repuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeamiento.repuesto.registrar');
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
            'codigo.required' => 'Es necesario ingresar el código del repuesto.',
            'descripcion.required' => 'Es necesario ingresar la descripción del repuesto.',
            'costo.required' => 'Es necesario ingresar el costo del repuesto.',

        ];

        $rules = [
            'codigo' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',

        ];
        $this->validate($request, $rules, $messages);

        
        $repuesto = new Repuesto();
        $repuesto->codigo = $request->input('codigo');     
        $repuesto->descripcion = $request->input('descripcion');   
        $repuesto->marca = $request->input('marca');   
        $repuesto->costo = $request->input('costo');      
        $repuesto->save();       
        return redirect('/Planeamiento/Repuesto');
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
        $repuestos = Repuesto::find($id);
        return view('planeamiento.repuesto.editar')->with(compact('repuestos'));
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
            'codigo.required' => 'Es necesario ingresar el código del repuesto.',
            'descripcion.required' => 'Es necesario ingresar la descripción del repuesto.',
            'costo.required' => 'Es necesario ingresar el costo del repuesto.',

        ];

        $rules = [
            'codigo' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',

        ];

        $this->validate($request, $rules, $messages);

        $repuesto = Repuesto::find($id);            
        $repuesto->codigo = $request->input('codigo');     
        $repuesto->descripcion = $request->input('descripcion');   
        $repuesto->marca = $request->input('marca');   
        $repuesto->costo = $request->input('costo');      
        $repuesto->save();       
        return redirect('/Planeamiento/Repuesto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repuesto = Repuesto::find($id);
        $repuesto->delete();        
        return redirect('/Planeamiento/Repuesto');
    }
}
