@extends('recursos.lyt-recursos')
@section('content-alquiler')
<div class="row">
  <div class="col-md-6">    
      <h3>Capacitaciones</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/RecursosHumanos/Capacitacion/RegistrarCapacitacion') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tema Capacitacion</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Participantes </th>  
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($capacitaciones as $capacitacion)


      <tr>                
        <td>{{ $capacitacion->tema}}</td>
        <td>{{ $capacitacion->fechaInicio}}</td>
        <td>{{ $capacitacion->fechaFin}}</td>

        <td>{{ count($capacitacion->empleados) }}</td>     
        <td>
          <a href="{{ url('/RecursosHumanos/Empleado/'.$capacitacion->id.'/EditarCliente') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
          <a href="{{ url('/RecursosHumanos/Empleado/'.$capacitacion->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
      </tr>  
      @endforeach 
   

  </tbody>
</table>


@stop