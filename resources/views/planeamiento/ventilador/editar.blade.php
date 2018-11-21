@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<form method="post" action="{{ url('/Planeamiento/VentiladorAxial/'.$ventilador->id.'/Actualizar')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Actualizar Ventilador</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i>Actualizar</button>            
    </div><br><br>
</div>
<h4>Producto</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo</label>       
        <input type="text" class="form-control" value="{{$ventilador->codigo}}" placeholder="Ingresar Codigo" name="codigo">
    </div>
    <div class="col-md-6">       
        <label for="">Costo</label>       
        <div class="input-group">                
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" value="{{$ventilador->costo}}" placeholder="Ingresar Costo Producto" name="costo">      
        </div>
    </div>
</div><br>
<div class="row">
        <div class="col-md-6">
            <label for="">Marca</label>       
            <select class="form-control" name="marcaid">
                    <option values="GIA">GIA</option>
                    <option values="REMOVEX">REMOVEX</option>
                    <option values="AIRTEC">AIRTEC</option>
            </select>
        </div>
        <div class="col-md-6">       
            <label for="">Modelo</label>       
            <input type="text" class="form-control" value="{{$ventilador->modelo}}" placeholder="Ingresar Modelo" name="modelo">
        </div>
</div><br>
<h4>Caracteristicas - Ventilador Axial</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Capacidad</label>
        <div class="input-group">              
            <input type="text" class="form-control" value="{{$ventilador->capacidad}}" placeholder="Ingresar Capacidad" name="capacidad">
            <span class="input-group-text">CFM</span>      
        </div>       
    </div>
    <div class="col-md-6">       
        <label for="">Medida Salida</label>
        <div class="input-group">              
            <input type="text" class="form-control" value="{{$ventilador->medida}}"  placeholder="Ingresar Medida Salida" name="medida">
            <span class="input-group-text">pulg</span>      
        </div>
    </div>
</div>
</form>
@stop