<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Foda;
use App\Factor;
use App\Estrategia;

class ApiEstrategiaController extends Controller
{
    public function index($idEmpresa,$idFoda,$tipoEstrategia)
    {

        $estrategias = Estrategia::where('id_Foda',$idFoda)->where('tipo_Estrategia',$tipoEstrategia)->get();
        return $estrategias;
    }

    public function factoresEstrategia($idEstrategia)
    {
        $factores=Estrategia::find($idEstrategia)->factores()->get();
        return $factores;
    }

    public function tipoFactorEstrategia($idEstrategia,$tipoFactor){
        $factores=Estrategia::find($idEstrategia)->factores()->where('tipo_Factor',$tipoFactor)->get();
        return $factores;
    }


    public function store(Request $request, $idFoda)
    {

        // Registrar un nuevo Factor

        $estrategias = Estrategia::where('id_Foda',$idFoda)->where('tipo_Estrategia',$request->tipo_Estrategia)->get();
        $numEstrategias = count($estrategias);
        $foda = Foda::find($idFoda);
        $estrategia = new Estrategia();
        $estrategia->descripcion = $request->descripcion;
        $estrategia->tipo_Estrategia = $request->tipo_Estrategia;
        $estrategia->estrategia_Cod= $request->tipo_Estrategia.($numEstrategias+1);
        $foda->estrategias()->save($estrategia);
        
        // return redirect('/admin/empresas/'.$idEmpresa.'/fodas/'.$foda->id.'/factores');
        return $estrategia;
    }


    public function storeEF($idEstrategia, $idFactor)
    {
        $estrategia=Estrategia::find($idEstrategia);
        $factor=Factor::where('factor_Cod',$idFactor)->firstOrFail();
        $estrategia->factores()->attach($factor);

        echo "prueba";
    }


    public function update(Request $request,$idEstrategia)
    {

        // Editar Estrategia
        $estrategia = Estrategia::find($idEstrategia);
        $estrategia->descripcion = $request->descripcion;
        $estrategia->factores()->detach();
        $estrategia->save();
        
        return $estrategia;
    }


    public function updateEF($idEstrategia, $idFactor)
    {
        $estrategia=Estrategia::find($idEstrategia);
        $factor=Factor::where('factor_Cod',$idFactor)->firstOrFail();
        $estrategia->factores()->attach($factor);

        echo "prueba";
    }

    public function destroy($idEstrategia)
    {

        $estrategia = Estrategia::find($idEstrategia);
        $estrategia->factores()->detach();
        $estrategia->delete();
    }
}
