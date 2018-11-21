<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Foda;
use App\Factor;


class ApiFactorController extends Controller
{
    public function index($idEmpresa,$idFoda,$tipoFactor)
    {
        // Listado
        // $empresa = Empresa::find($idEmpresa);
        // $foda = Foda::find($idFoda);
        // $factores =  $foda->factores->where('tipo_Factor', 'F');

        $factores = Factor::where('id_Foda',$idFoda)->where('tipo_Factor',$tipoFactor)->get();
        return $factores;
    }


    public function store(Request $request, $idEmpresa, $idFoda)
    {

        // Registrar un nuevo Factor

        $factores = Factor::where('id_Foda',$idFoda)->where('tipo_Factor',$request->tipo_Factor)->get();
        $numFactores= count($factores);
        $foda = Foda::find($idFoda);
        $factor = new Factor();
        $factor->descripcion = $request->descripcion;
        $factor->tipo_Factor = $request->tipo_Factor;
        $factor->factor_Cod= $request->tipo_Factor.($numFactores+1);
        $foda->factores()->save($factor);
        
        // return redirect('/admin/empresas/'.$idEmpresa.'/fodas/'.$foda->id.'/factores');
        return $factor;
    }

    public function update(Request $request,$idEmpresa, $idFoda, $id)
    {

        // Editar Factor
        $factor = Factor::find($id);
        $factor->descripcion = $request->descripcion;
        $factor->save();
        
        return $factor;
    }

    public function destroy($idEmpresa, $idFoda,$id)
    {
        $factor = Factor::find($id);
        $foda = Foda::find($idFoda);
        
        $factor->delete();
        
        $factores = Factor::where('id_Foda',$idFoda)->where('tipo_Factor',$factor->tipo_Factor)->get();
        $cont=1;

        foreach ($factores as $factor) {
            $factor->factor_Cod= $factor->tipo_Factor.($cont);
            $foda->factores()->save($factor);
            $cont++;
        }
    }
}
