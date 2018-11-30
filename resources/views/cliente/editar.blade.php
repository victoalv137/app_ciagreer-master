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
<form method="post" action="{{ url('/Cliente/'.$clientes->id.'/Actualizar')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Actualizar Cliente</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Actualizar</button>          
    </div><br><br>
</div>
<h4>Cliente</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Nombre Comercial</label>       
    <input type="text" class="form-control" value="{{$clientes->nombreComercial}}" placeholder="Ingresar Nomnbre Comercial" name="nombre"><br>
        <label for="">RUC</label>       
        <input type="text" class="form-control"  value="{{$clientes->ruc}}" placeholder="Ingresar RUC" name="ruc"><br>
        <label for="">Giro de Negocio</label>       
        <input type="text" class="form-control" value="{{$clientes->giroNegocio}}"  placeholder="Ingresar Giro de Negocio" name="giro"><br>
    </div>
    <div class="col-md-6">       
        <label for="">Telefono</label>       
        <input type="tel" class="form-control" value="{{$clientes->telefono}}" placeholder="Ingresar Telefono" name="telefono"><br>
        <label for="">Direccion</label>       
        <input type="text" class="form-control" value="{{$clientes->direccion}}" placeholder="Ingresar direccion" name="direccion">      
        </div>
    </div>
</div>
</form>
@stop