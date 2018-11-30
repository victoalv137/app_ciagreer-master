<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bomba;
use App\Producto;

class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bomba = Bomba::all();
        return view('planeamiento.bomba.index')->with(compact('bomba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeamiento.bomba.registrar');
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
            'codigo.required' => 'Es necesario ingresar el código de la bomba.',
            'costo.required' => 'Es necesario ingresar el costo de la bomba.',
            'modelo.required' => 'Es necesario ingresar el modelo de la bomba.',
            'alto.required' => 'Es necesario ingresar el alto de la bomba',
            'caballo.required' => 'Es necesario ingresar los caballos de fuerza de la bomba',
            'ancho.required' => 'Es necesario ingresar el ancho de la bomba',
            'velocidad.required' => 'Es necesario ingresar la velocidad de la bomba',
        ];

        $rules = [
            'codigo' => 'required',
            'costo' => 'required',
            'modelo' => 'required',
            'alto' => 'required',
            'caballo' => 'required',
            'ancho' => 'required',
            'velocidad' => 'required',
        ];
        $this->validate($request, $rules, $messages);



        $producto = new Producto();
        $producto->codigo = $request->input('codigo');
        $producto->costo = $request->input('costo');
        $producto->tipo ='B';
        $bomba = new Bomba();    
        $bomba->marca = $request->input('marcaid');
        $bomba->modelo = $request->input('modelo'); 
        $bomba->alto = $request->input('alto');    
        $bomba->caballo = $request->input('caballo');
        $bomba->ancho = $request->input('ancho');  
        $bomba->velocidad = $request->input('velocidad');
        $producto->save();
        $producto->bomba()->save($bomba);  
        return redirect('/Planeamiento/BombaSumergible');
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

        
        $bomba = Bomba::find($id);
        return view('planeamiento.bomba.editar')->with(compact('bomba'));
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
            'codigo.required' => 'Es necesario ingresar el código de la bomba.',
            'costo.required' => 'Es necesario ingresar el costo de la bomba.',
            'modelo.required' => 'Es necesario ingresar el modelo de la bomba.',
            'alto.required' => 'Es necesario ingresar el alto de la bomba',
            'caballo.required' => 'Es necesario ingresar los caballos de fuerza de la bomba',
            'ancho.required' => 'Es necesario ingresar el ancho de la bomba',
            'velocidad.required' => 'Es necesario ingresar la velocidad de la bomba',
        ];

        $rules = [
            'codigo' => 'required',
            'costo' => 'required',
            'modelo' => 'required',
            'alto' => 'required',
            'caballo' => 'required',
            'ancho' => 'required',
            'velocidad' => 'required',
        ];
        $this->validate($request, $rules, $messages);

        
        $bomba = Bomba::find($id);            
        $bomba->producto->codigo = $request->input('codigo');
        $bomba->producto->costo = $request->input('costo');
        $bomba->marca = $request->input('marcaid');
        $bomba->modelo = $request->input('modelo'); 
        $bomba->alto = $request->input('alto');    
        $bomba->caballo = $request->input('caballo');
        $bomba->ancho = $request->input('ancho');  
        $bomba->velocidad = $request->input('velocidad');     
        $bomba->save();
        return redirect('/Planeamiento/BombaSumergible');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bomba = Bomba::find($id);
        $bomba->delete();        
        return redirect('/Planeamiento/BombaSumergible');
    }
}
