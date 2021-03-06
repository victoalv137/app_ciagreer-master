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
<form method="post" action="{{ url('/AlquilerVenta/Cotizacion/'.$alquiler->cotizacion->id.'/Alquiler/'.$alquiler->id.'/ActualizarAlquiler')}}">
    {{ csrf_field() }}
 <div class="row">
        <div class="col-md-6">    
            <h3>Registrar Alquiler</h3>
        </div>
        <div class="col-md-1 offset-4 text-right">        
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Actualizar Alquiler</button>        
        </div><br><br>
    </div>
    <h4>Datos Generales</h4>
    <div class="row">
        <div class="col-md-6">
            <label for="">Cotizacion</label>       
        <input type="text" class="form-control" value="{{$alquiler->cotizacion->codigo}}" name="codigo" disabled>
        <input type="text" class="form-control" value="{{$alquiler->cotizacion->id}}" name="codcotizacion" style="display:none;">
        </div>
        <div class="col-md-6">       
                <label for="">Cliente</label>       

        <input type="text" class="form-control" value="{{$alquiler->cotizacion->cliente->nombreComercial}}" name="cliente" disabled>
        <input type="text" class="form-control" value="{{$alquiler->cotizacion->cliente->id}}" name="codcliente" style="display:none;">
        </div>
    </div><br>
    <div class="row">
            <div class="col-md-6">
                    <label for="">Producto</label>       
                    <input type="text" class="form-control" value="{{$alquiler->cotizacion->producto->codigo}}" name="producto" disabled>
            </div>
            <div class="col-md-6">       
                    <label for="">Costo(Mes)</label>       
                    <input type="number" min="1" step="any" class="form-control" value="{{$alquiler->cotizacion->producto->costo}}" name="costo" disabled>
            </div>
    </div><br>
    <h4>Datos Llenables</h4>
<div class="row">
        <div class="col-md-6">            
            <label for="">Lugar Partida</label>       
            <input type="text" class="form-control" value={{$alquiler->partida}} placeholder="Ingresar Lugar Partida" name="partida" ><br>
            <label for="">Obra</label>       
            <input type="text" class="form-control"value={{$alquiler->obra}}  placeholder="Ingresar Obra" name="obra" >
        </div>
        <div class="col-md-6">
                <label for="">Lugar Llegada</label>       
                <input type="text" class="form-control" value={{$alquiler->llegada}} placeholder="Ingresar Lugar de Llegada" name="llegada" ><br>
            <label for="">Tiempo Alquiler</label>
            <div class="input-group">  
                <span class="input-group-text">Meses</span>              
                <input type="number" min="1" step="1" class="form-control" value={{$alquiler->tiempo}} placeholder="Ingresar Tiempo Alquiler" name="tiempo">
            </div>
        </div>
    </div>
</form>
@stop