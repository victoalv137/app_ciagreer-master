@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<form method="post" action="{{ url('/AlquilerVenta/Ventas/CrearVenta/'.$venta->id.'/Productos')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Venta</h3>
    </div>
    <div class="col-md-1 offset-4 text-right">        
        <a href="{{ url('/AlquilerVenta/Ventas') }}" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</a>
    </div><br><br>
</div>
<h4>Venta</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo Venta</label>       
        <input type="text" class="form-control" value ="{{$venta->codigo}}" placeholder="Ingresar Codigo Venta" name="codigo" disabled>
    </div>
    <div class="col-md-6">       
        <label for="">Cliente</label>   
        <input type="text" class="form-control"  value ="{{$venta->cliente->nombreComercial}}" placeholder="Ingresar Codigo Venta" name="codigo" disabled>
    </div>
</div><br>
<div class="row">
    <div class="col-md-6">       
    <label for="">Cliente</label>   
    <select class="form-control" name="repuesto">
        @foreach ($repuestos as $repuesto)
             <option value="{{$repuesto->id}}">{{$repuesto->descripcion}}</option>
        @endforeach                    
     </select>
    </div><br>   
     <div class="col-md-0 offset-3 text-right">   
        <button type="submit" class="btn btn-success text-right"><i class="fas fa-plus-circle"></i> Agregar Producto</button>          
        <a href="{{ url('/AlquilerVenta/Ventas/CrearVenta/'.$venta->id.'/Productos/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancelar Venta</a>

    </div>
</div>
</form><br>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Respuesto</th>      
        <th scope="col">Costo</th>         
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dventas as $dventa) 
      <tr>                
        <td >{{ $dventa->repuesto->codigo}}</td>
        <td >{{ $dventa->repuesto->descripcion}}</td>
        <td >{{ $dventa->repuesto->costo}}</td>     
        <td > 
          <a href="{{ url('/AlquilerVenta/Ventas/CrearVenta/'.$dventa->id.'/Productos/'.$dventa->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
      </tr>  
       @endforeach  
    </tbody>
  </table>
@stop