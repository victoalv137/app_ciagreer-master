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
<form method="post" action="{{ url('/AlquilerVenta/Cotizacion/Guardar')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Cotizacion</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</button>          
    </div><br><br>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo Cotizacion</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo Cotizacion" name="codigo"><br>
        <label for="">Cliente</label>   
           <select class="form-control" name="cliente">
               @foreach ($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nombreComercial}}</option>
               @endforeach                    
            </select><br>
        <label for="">Producto</label>       
             <select class="form-control" name="producto">
                    @foreach ($productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->codigo}}</option>
                    @endforeach
              </select><br>
        </div>
    <div class="col-md-6">       
        <label for="">Validez Oferta</label>       
        <div class="input-group">            
            <input type="number" min="1" max="31" class="form-control" placeholder="Ingresar Validez Oferta" name="validez"> 
            <span class="input-group-text">Dias</span>     
        </div><br>
        <label for="">Pago</label>       
        <input type="number" min="1" step="any" class="form-control" placeholder="Ingresar Pago" name="pago"><br>
        
        </div>
    </div>
</div>
</form>
@stop