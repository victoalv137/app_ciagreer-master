@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<div class="row">
  <div class="col-md-6">    
      <h3>Bombas Sumergibles</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/Planeamiento/BombaSumergible/Registrar') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
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
    <tr>
    @php
      $cont=1;     
    @endphp
    @foreach ($bomba as $bombas)
      <th scope="row">1</th>
      <td>{{ $cont }}</td>
      <td>{{ $bombas->codigo}}</td>
      <td>{{ $bombas->costo}}</td>
      <td>{{ $bombas->marca}}</td>
      <td>{{ $bombas->modelo}}</td>
      <td>
        <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
      </td> 
    @php
      $cont++;     
    @endphp  
    @endforeach   
    </tr>    
  </tbody>
</table>

@stop
