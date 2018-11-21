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
      <th scope="col">Potencia Nominal</th>     
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($bomba as $bombas)
    <tr>                
      <td >{{ $bombas->codigo}}</td>
      <td >{{ $bombas->costo}}</td>
      <td >{{ $bombas->marca}}</td>
      <td >{{ $bombas->modelo}}</td>
      <td >{{ $bombas->caballo}}</td>
      <td >
        <a href="{{ url('/Planeamiento/BombaSumergible/'.$bombas->id.'/EditarBomba') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
        <a href="{{ url('/Planeamiento/BombaSumergible/'.$bombas->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
      </td>
    </tr>  
    @endforeach   
  </tbody>
</table>

@stop
