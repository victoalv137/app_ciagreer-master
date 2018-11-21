@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<form method="post" action="{{ url('/Planeamiento/Tablero/'.$tablero->id.'/Actualizar')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Tablero</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i>Actualizar</button>   
    </div><br><br>
</div>
<h4>Producto</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo</label>       
    <input type="text" class="form-control" value="{{$tablero->codigo}}" placeholder="Ingresar Codigo" name="codigo">
    </div>
    <div class="col-md-6">       
        <label for="">Costo</label>       
        <div class="input-group">                
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" value="{{$tablero->costo}}" placeholder="Ingresar Costo Producto" name="costo">      
        </div>
    </div>
</div><br>
<div class="row">
        <div class="col-md-6">
            <label for="">Marca</label>       
            <select class="form-control" value="{{$tablero->marca}}" name="marcaid">
                    <option values="EXPRESS D3">EXPRESS D3</option>
                    <option values="PILOT">PILOT</option>
                    <option values="EMM">EMM </option>
            </select>
        </div>
        <div class="col-md-6">       
            <label for="">Modelo</label>       
            <input type="text" class="form-control"  value="{{$tablero->modelo}}" placeholder="Ingresar Modelo" name="modelo">
        </div>
</div>
</form>
@stop