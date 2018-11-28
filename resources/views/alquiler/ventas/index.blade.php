@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
<div class="row">
  <div class="col-md-6">    
      <h3>Ventas</h3>
  </div>
  <div class="col-md-1 offset-5 text-right"> 
      <a href="{{ url('AlquilerVenta/Ventas/CrearVenta') }}" class="btn btn-success text-right"><i class="fas fa-plus-square"></i> Registrar</a>            
  </div><br><br>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Cliente</th>      
      <th scope="col">Fecha</th>         
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($ventas as $venta) 
    <tr>                
      <td >{{ $venta->codigo}}</td>
      <td >{{ $venta->cliente->nombreComercial}}</td>
      <td >{{ $venta->created_at}}</td>     
      <td >
        <a href="{{ url('/AlquilerVenta/Ventas/'.$venta->id.'/EditarVenta') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
        <a href="{{ url('/AlquilerVenta/Ventas/'.$venta->id.'/Imprimir') }}" class="btn btn-dark"><i class="fas fa-print"></i> imprimir</a>
        <a href="{{ url('/AlquilerVenta/Ventas/'.$venta->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
      </td>
    </tr>  
     @endforeach  
  </tbody>
</table>


@stop