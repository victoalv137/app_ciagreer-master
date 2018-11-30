@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
@if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
<form method="post" action="{{ url('/Planeamiento/BombaSumergible/'.$bomba->id.'/Actualizar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Actualizar Bombas</h3>
    </div>
    <div class="col-md-1 offset-5 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Actualizar</button>        
    </div><br><br>
</div>
<h4>Producto</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo</label>       
        <input type="text" class="form-control" value="{{$bomba->producto->codigo}}" placeholder="Ingresar Codigo" name="codigo">
    </div>
    <div class="col-md-6">       
        <label for="">Costo</label>       
        <div class="input-group">                
        <span class="input-group-text">$</span>
        <input type="number" min="1" step="any" class="form-control" value="{{$bomba->producto->costo}}" placeholder="Ingresar Costo Producto" name="costo">      
        </div>
    </div>
</div><br>
<div class="row">
        <div class="col-md-6">
            <label for="">Marca</label>       
            <select class="form-control" value="{{$bomba->marca}}" name="marcaid">
                    <option value="EBARA">EBARA</option>
                    <option value="TSURUMI">TSURUMI</option>
                    <option value="GRINDEX">GRINDEX</option>
                    <option value="HIDRO-PUMP">HIDRO-PUMP</option>
                    <option value="FLYGT">FLYGT</option>
            </select>
        </div>
        <div class="col-md-6">       
            <label for="">Modelo</label>       
            <input type="text" class="form-control"  value="{{$bomba->modelo}}" placeholder="Ingresar Modelo" name="modelo">
        </div>
</div><br>
<h4>Caracteristicas - Bomba Sumergible</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Alto</label>
        <div class="input-group">              
            <input type="number" min="1" step="any" class="form-control" value="{{$bomba->alto}}" placeholder="Ingresar Caballos  de Fuerza" name="alto">
            <span class="input-group-text">mm</span>      
        </div><br>
        <label for="">Ancho</label>
        <div class="input-group">              
            <input type="number" min="1" step="any" class="form-control" value="{{$bomba->ancho}}"  placeholder="Ingresar Maxima Altitud Dinamica" name="ancho">
            <span class="input-group-text">mm</span>      
        </div>
    </div>
    <div class="col-md-6">
        <label for="">Potencia Nominal</label>
        <div class="input-group">              
            <input type="number" min="1" step="any"  class="form-control" value="{{$bomba->caballo}}"  placeholder="Ingresar Caballos  de Fuerza" name="caballo">
            <span class="input-group-text">HP</span>      
        </div><br>
        <label for="">Velocidad</label>
        <div class="input-group">              
            <input type="number" min="1" step="any" class="form-control" value="{{$bomba->velocidad}}"  placeholder="Ingresar Maxima Altitud Dinamica" name="velocidad">
            <span class="input-group-text">rpm</span>      
        </div>
    </div>
</div>
</form>
@stop