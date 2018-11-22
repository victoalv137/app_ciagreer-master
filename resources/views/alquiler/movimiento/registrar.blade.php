@extends('alquiler.lyt-alquiler')
@section('content-alquiler')
<form method="post" action="{{ url('/Planeamiento/BombaSumergible/Guardar')}}">
    {{ csrf_field() }}
 <div class="row">
        <div class="col-md-6">    
            <h3>Registrar Alquiler</h3>
        </div>
        <div class="col-md-1 offset-5 text-right">        
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</button>        
        </div><br><br>
    </div>
    <h4>Datos Generales</h4>
    <div class="row">
        <div class="col-md-6">
            <label for="">Cotizacion</label>       
            <input type="text" class="form-control" value="" name="codigo" disabled>
        </div>
        <div class="col-md-6">       
                <label for="">Cliente</label>       
                <input type="text" class="form-control" value="" name="codigo" disabled>
        </div>
    </div><br>
    <div class="row">
            <div class="col-md-6">
                    <label for="">Producto</label>       
                    <input type="text" class="form-control" value="" name="codigo" disabled>
            </div>
            <div class="col-md-6">       
                    <label for="">Costo(Mes)</label>       
                    <input type="text" class="form-control" value="" name="codigo" disabled>
            </div>
    </div><br>
    <h4>Datos Llenables</h4>
<div class="row">
        <div class="col-md-6">            
            <label for="">Lugar Partida</label>       
            <input type="text" class="form-control" placeholder="Ingresar Lugar Partida" name="partida" ><br>
            <label for="">Obra</label>       
            <input type="text" class="form-control" placeholder="Ingresar Obra" name="obra" >
        </div>
        <div class="col-md-6">
                <label for="">Lugar Llegada</label>       
                <input type="text" class="form-control" placeholder="Ingresar Lugar de Llegada" name="llegada" ><br>
            <label for="">Tiempo Alquiler</label>
            <div class="input-group">  
                <span class="input-group-text">Meses</span>              
                <input type="text" class="form-control" placeholder="Ingresar Tiempo Alquiler" name="tiempo">
            </div>
        </div>
    </div>
</form>
@stop