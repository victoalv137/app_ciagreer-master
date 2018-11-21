@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Tablero</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
        <a href="{{ url('/Planeamiento/Tablero/registrar') }}" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</a>            
    </div><br><br>
</div>
<h4>Producto</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo" name="codigo">
    </div>
    <div class="col-md-6">       
        <label for="">Costo</label>       
        <div class="input-group">                
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" placeholder="Ingresar Costo Producto" name="costo">      
        </div>
    </div>
</div><br>
<div class="row">
        <div class="col-md-6">
            <label for="">Marca</label>       
            <select class="form-control">
                    <option>Seleccionar Marca</option>
            </select>
        </div>
        <div class="col-md-6">       
            <label for="">Modelo</label>       
            <input type="text" class="form-control" placeholder="Ingresar Modelo" name="modelo">
        </div>
</div>
@stop