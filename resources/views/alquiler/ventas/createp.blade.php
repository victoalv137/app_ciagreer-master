@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
@if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
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
    </div>
    <div class="col-md-6">       
        <label for="">Cantidad</label>   
        <input type="number" min="1" step="1" class="form-control"  value ="" placeholder="Ingresar Cantidad" name="cantidad">
    </div>
    <br>  
    <br> 
     <div class="col-md-0 offset-9 text-right mt-3">   
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
        <th scope="col">Cantidad</th>     
        <th scope="col">Costo</th>
        <th scope="col">Subtotal</th>      
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dventas as $dventa) 
      <tr>                
        <td >{{ $dventa->repuesto->codigo}}</td>
        <td >{{ $dventa->repuesto->descripcion}}</td>
        <td >{{ $dventa->cantidad}}</td>
        <td >{{ $dventa->repuesto->costo}}</td>     
        <td >{{ $dventa->cantidad*$dventa->repuesto->costo }}</td>
        <td > 
          <a href="{{ url('/AlquilerVenta/Ventas/CrearVenta/'.$venta->id.'/Productos/'.$dventa->id.'/Eliminar') }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
      </tr>  
       @endforeach  
    </tbody>
  </table>
@stop