@extends('recursos.lyt-recursos')
@section('content-Recursos')
<div class="row">
  <div class="col-md-6">    
      <h3>Empleados</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/RecursosHumanos/RegistrarEmpleado') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre Completo</th>
      <th scope="col">DNI</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha Nacimiento</th>      
      <th scope="col">Area</th>     
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($empleados as $empleado)
      <tr>                
        <td >{{ $empleado->nombres.' '.$empleado->apellidos}}</td>
        <td >{{ $empleado->dni}}</td>
        <td >{{ $empleado->direccion}}</td>
        <td >{{ $empleado->fechaNacimiento}}</td>
        <td >{{ $empleado->area->nombre}}</td>
        <td >
          <a href="{{ url('/RecursosHumanos/Empleado/'.$empleado->id.'/EditarEmpleado') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
          <a href="{{ url('/RecursosHumanos/Empleado/'.$empleado->id.'/EliminarEmpleado') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
      </tr>  
      @endforeach 
   

  </tbody>
</table>


@stop