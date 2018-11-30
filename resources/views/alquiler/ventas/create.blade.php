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
<form method="post" action="{{ url('/AlquilerVenta/Ventas/Guardar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Venta</h3>
    </div>
    <div class="col-md-1 offset-4 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Agregar Productos</button>        
    </div><br><br>
</div>
<h4>Venta</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo Venta</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo Venta" name="codigo">
    </div>
    <div class="col-md-6">       
        <label for="">Cliente</label>   
        <select class="form-control" name="cliente">
            @foreach ($clientes as $cliente)
                 <option value="{{$cliente->id}}">{{$cliente->nombreComercial}}</option>
            @endforeach                    
         </select><br>
    </div>
</div><br>
</form>
@stop