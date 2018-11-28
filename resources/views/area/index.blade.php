@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
<div class="row">
  <div class="col-md-6">    
      <h3>Areas</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/RecursosHumanos/Areas/RegistrarArea') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo Area</th>
      <th scope="col">Nombre Area</th>
      <th scope="col">Descripcion</th>.
      <th scope="col">Opciones</th>     
    </tr>
  </thead>
  <tbody>
      @foreach ($areas as $area)
    <tr>   
      <td >{{ $area->codigo}}</td>             
      <td >{{ $area->nombre}}</td>
      <td >{{ $area->descripcion}}</td>    
      <td >
        <a href="{{ url('/RecursosHumanos/Areas/'.$area->id.'/EditarCliente') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
        <a href="{{ url('/RecursosHumanos/Areas/'.$area->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
      </td>
    </tr>  
    @endforeach   
  </tbody>
</table>


@stop