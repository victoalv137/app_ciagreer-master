@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
<div class="row">
  <div class="col-md-6">    
      <h3>Clientes</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('/Cliente/Registrar') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre Comercial</th>
      <th scope="col">Ruc</th>
      <th scope="col">Giro de Negocio</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>     
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($clientes as $cliente)
    <tr>                
      <td >{{ $cliente->nombreComercial}}</td>
      <td >{{ $cliente->ruc}}</td>
      <td >{{ $cliente->giroNegocio}}</td>
      <td >{{ $cliente->telefono}}</td>
      <td >{{ $cliente->direccion}}</td>
      <td >
        <a href="{{ url('/Cliente/'.$cliente->id.'/EditarCliente') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
        <a href="{{ url('/Cliente/'.$cliente->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
      </td>
    </tr>  
    @endforeach   
  </tbody>
</table>


@stop