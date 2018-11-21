@extends('planeamiento.lyt-planeamiento')
@section('content-planeamiento')
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Bombas</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
        <a href="{{ url('/Planeamiento/BombaSumergible/registrar') }}" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</a>            
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
            <select class="form-control" name="marcaid">
                    <option value="1">EBARA</option>
                    <option value="2">TSURUMI</option>
                    <option value="3">GRINDEX</option>
            </select>
        </div>
        <div class="col-md-6">       
            <label for="">Modelo</label>       
            <input type="text" class="form-control" placeholder="Ingresar Modelo" name="modelo">
        </div>
</div><br>
<h4>Caracteristicas - Bomba Sumergible</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Alto</label>
        <div class="input-group">              
            <input type="text" class="form-control" placeholder="Ingresar Caballos  de Fuerza" name="alto">
            <span class="input-group-text">mm</span>      
        </div><br>
        <label for="">Ancho</label>
        <div class="input-group">              
            <input type="text" class="form-control" placeholder="Ingresar Maxima Altitud Dinamica" name="ancho">
            <span class="input-group-text">mm</span>      
        </div>
    </div>
    <div class="col-md-6">
        <label for="">Peso</label>
        <div class="input-group">              
            <input type="text" class="form-control" placeholder="Ingresar Caballos  de Fuerza" name="peso">
            <span class="input-group-text">Kg</span>      
        </div><br>
        <label for="">Velocidad</label>
        <div class="input-group">              
            <input type="text" class="form-control" placeholder="Ingresar Maxima Altitud Dinamica" name="velocidad">
            <span class="input-group-text">rpm</span>      
        </div>
    </div>
</div>

@stop