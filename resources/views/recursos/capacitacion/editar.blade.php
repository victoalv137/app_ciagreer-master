@extends('recursos.lyt-recursos')
@section('content-Recursos')
<form method="post" action="{{ url('/RecursosHumanos/Capacitacion/'.$capacitacion->id.'/Actualizar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Capacitacion</h3>
    </div>
    <div class="col-md-1 offset-4 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="fas fa-plus-circle"></i> Actualizar</button>          

    </div><br><br>
</div>
<h4>Capacitacion</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Tema Capacitacion</label>       
        <input type="text" class="form-control" value ="{{$capacitacion->tema}}" name="tema"  >
    </div>
    <div class="col-md-6">       
        <label for="">Fecha Inicio</label>   
        <input type="text" class="form-control"  value ="{{$capacitacion->fechaInicio}}"  name="fechainicio" >
    </div>
    <div class="col-md-6">       
        <label for="">Fecha Fin</label>   
        <input type="text" class="form-control"  value ="{{$capacitacion->fechaFin}}"  name="fechafin" >
    </div>
</div><br>

</form>
<form method="post" action="{{ url('/RecursosHumanos/Capacitacion/'.$capacitacion->id.'/EditarCapacitacion/Participantes')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">       
    <label for="">Participantes</label>   
    <select class="form-control" name="empleado">
        @foreach ($empleados as $empleado)
             <option value="{{$empleado->id}}">{{$empleado->nombres.' '.$empleado->apellidos}}</option>
        @endforeach                    
     </select>
    </div><br>  
     <div class="col-md-0 offset-1 text-right">   
        <button type="submit" class="btn btn-success text-right"><i class="fas fa-plus-circle"></i> Agregar Participantes</button>          
        <a href="{{ url('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/'.$capacitacion->id.'/Participantes/EliminarCapacitacion') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancelar Capacitacion</a>

    </div>
</div>
</form><br>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nombre Completo</th>
        <th scope="col">DNI</th>      
        <th scope="col">Area</th>         
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($capacitacion->empleados as $empleadosC) 
      <tr>                
        <td >{{ $empleadosC->nombres.' '.$empleadosC->apellidos}}</td>
        <td >{{ $empleadosC->dni}}</td>
        <td >{{ $empleadosC->area->nombre}}</td>     
        <td > 
          <a href="{{ url('/RecursosHumanos/Capacitacion/RegistrarCapacitacion/'.$capacitacion->id.'/Participantes/'.$empleadosC->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
      </tr>  
       @endforeach  
    </tbody>
  </table>
@stop