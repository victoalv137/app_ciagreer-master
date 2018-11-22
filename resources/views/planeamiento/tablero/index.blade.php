@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<div class="row">
  <div class="col-md-6">    
      <h3>Tableros</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/Planeamiento/Tablero/Registrar') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Costo</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>           
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($tablero as $tableros) 
    <tr>   
        <td>{{ $tableros->producto->codigo}}</td>
        <td>{{ $tableros->costo}}</td>
        <td>{{ $tableros->marca}}</td>
        <td>{{ $tableros->modelo}}</td>       

      <td>
          <a href="{{ url('/Planeamiento/Tablero/'.$tableros->id.'/EditarTablero') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
          <a href="{{ url('/Planeamiento/Tablero/'.$tableros->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
      </td>   
   </tr>
   @endforeach      
  </tbody>
</table>

@stop
