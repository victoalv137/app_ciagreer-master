<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Empleado;
use App\Capacitacion;
use App\DetalleCapacitacion;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexEmpleado()
    {
        $empleados=Empleado::all();
        return view('recursos.personal.index')->with(compact('empleados'));
    }
    public function indexArea()    
    {
        $areas=Area::all();
        return view('area.index')->with(compact('areas'));
    }
    public function indexCapacitacion()    
    {
        $capacitaciones=Capacitacion::all();

        return view('recursos.capacitacion.index')->with(compact('capacitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEmpleado()    
    {
        $areas=Area::all();
        return view('recursos.personal.registrar')->with(compact('areas'));
    }
    public function createArea()
    {
        return view('area.registrar');
    }
    public function editarArea($id)
    {
        $area=Area::find($id);
        return view('area.editar')->with(compact('area'));
    }
    public function actualizarArea(Request $request,$id)
    {
        $area = Area::find($id);            
        $area->codigo = $request->input('codigo');       
        $area->nombre = $request->input('nombre');   
        $area->descripcion = $request->input('descripcion');      
        $area->save();
        return redirect('/RecursosHumanos/Areas');
        
    }
    public function eliminarArea($id)
    {
        $area = Area::find($id);
        $area->delete();        
        return redirect('/RecursosHumanos/Areas');
    }
    public function editarEmpleado($id)
    {
        $empleado=Empleado::find($id);
        $areas=Area::all();
        return view('recursos.personal.editar')->with(compact('empleado','areas'));
    }
    public function actualizarEmpleado(Request $request,$id)
    {
        $empleado = Empleado::find($id);            
        $name='';
        if($request->hasFile('cv')){
            $file=$request->file('cv');
            $name =$file->getClientOriginalName();
            $file->move(public_path().'/cv/',$name);
            
        }
        $empleado->nombres = $request->input('nombres');       
        $empleado->apellidos = $request->input('apellidos');   
        $empleado->dni = $request->input('dni');  
        $empleado->sexo = $request->input('sexo');  
        $empleado->direccion = $request->input('direccion');          
        $empleado->telefono = $request->input('telefono'); 
        $empleado->fechaNacimiento = $request->input('fecha');  
        $empleado->area_id = $request->input('area');
        $empleado->cv=$name;  
        $empleado->save();
        return redirect('/RecursosHumanos/Empleados');
        
    }
    public function eliminarEmpleado($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();        
        return redirect('/RecursosHumanos/Empleados');
    }
    public function createCapacitacion()  
    {
        return view('recursos.capacitacion.registrar');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArea(Request $request)
    {
        $area= new Area();
        $area->codigo = $request->input('codigo');       
        $area->nombre = $request->input('nombre');   
        $area->descripcion = $request->input('descripcion');      
        $area->save();
        return redirect('/RecursosHumanos/Areas');
    }
    public function storeEmpleado(Request $request)
    {
        $name='';
        if($request->hasFile('cv')){
            $file=$request->file('cv');
            $name =$file->getClientOriginalName();
            $file->move(public_path().'/cv/',$name);
            
        }
        $empleado= new Empleado();
        $empleado->nombres = $request->input('nombres');       
        $empleado->apellidos = $request->input('apellidos');   
        $empleado->dni = $request->input('dni');  
        $empleado->sexo = $request->input('sexo');  
        $empleado->direccion = $request->input('direccion');          
        $empleado->telefono = $request->input('telefono'); 
        $empleado->fechaNacimiento = $request->input('fecha');  
        $empleado->area_id = $request->input('area');
        $empleado->cv=$name;  
        $empleado->save();
        return redirect('/RecursosHumanos/Areas');
    }
    public function storeCapacitacion(Request $request)
    {
        $capacitacion= new Capacitacion();
        $capacitacion->tema = $request->input('tema');       
        $capacitacion->fechaInicio = $request->input('fechainicio');   
        $capacitacion->fechaFin = $request->input('fechafin');    
        $capacitacion->save();
        return redirect('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/'.$capacitacion->id.'/Participantes');
       
    }
    public function Participantes(Request $request, $idcapacitacion)
    {
        
        $capacitacion = Capacitacion::find($idcapacitacion);

        $capacitacion->empleados()->attach($request->input('empleado'));
        return redirect()->back();
       
    }
    public function VerParticipantes($idcapacitacion)    
    {
        $capacitacion = Capacitacion::find($idcapacitacion);        
        $empleados =Empleado::all();  
        return view('recursos.capacitacion.participantes')->with(compact('capacitacion','empleados'));
    }
    public function EliminarParticipante($idcapacitacion,$idempleado)    
    {
        $capacitacion = Capacitacion::find($idcapacitacion); 
        $capacitacion->empleados()->detach($idempleado);
        return redirect()->back();
    }
    public function EliminarCapacitacion($idcapacitacion)    
    {
        $capacitacion = Capacitacion::find($idcapacitacion); 
        foreach ($capacitacion->empleados as $empleadosC) {
            $capacitacion->empleados()->detach($empleadosC);
        } 
        $capacitacion->delete();
        return redirect('/RecursosHumanos/Capacitacion');   
      
    }

    public function ImprimirCapacitacion($id)    
    {
        $capacitacion = Capacitacion::find($id);  
        return view('recursos.capacitacion.imprimir')->with(compact('capacitacion'));
        
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
        //
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
    public function destroy($id)
    {
        //
    }
}
