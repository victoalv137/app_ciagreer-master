@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
<div class="row">
    <div class="col-md-6">    
        <h3>Alquiler</h3>
    </div>    
</div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Cotizacion</th>
        <th scope="col">Costo</th>
        <th scope="col">Tiempo(Meses)</th>
        <th scope="col">Cliente</th>
        <th scope="col">Obra</th>     
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
  <tbody>
        @foreach ($alquileres as $alquiler) 
      <tr>                
        <td >{{ $alquiler->cotizacion->codigo}}</td>
        <td >{{ $alquiler->cotizacion->producto->costo}}</td>
        <td >{{ $alquiler->cliente->nombreComercial}}</td>
        <td >{{ $alquiler->tiempo}}</td>
        <td >{{ $alquiler->obra}}</td>      
        <td >
          <a href="{{ url('/AlquilerVenta/Cotizacion/'.$alquiler->id.'/EditarCotizacion') }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
          <a href="{{ url('/AlquilerVenta/Cotizacion/'.$alquiler->id.'/Imprimir') }}" class="btn btn-dark"><i class="fas fa-print"></i> imprimir</a>          
          <a href="{{ url('/AlquilerVenta/Cotizacion/'.$alquiler->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a> 
        </td>
      </tr>  
      @endforeach   
    </tbody> 
  </table>
@stop