@extends('recursos.lyt-recursos')
@section('content-Recursos')
<form method="post" action="{{ url('/RecursosHumanos/Areas/Guardar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Area</h3>
    </div>
    <div class="col-md-1 offset-4 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar</button>        
    </div><br><br>
</div>
<h4>Area</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo Area</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo Area" name="codigo"><br>
        <label for="">Nombre Area</label>       
        <input type="text" class="form-control" placeholder="Ingresar Nombre Area" name="nombre">
    </div>
    <div class="col-md-6">       
        <label for="">Descripcion Area</label>   
        <input type="text" class="form-control" placeholder="Ingresar Descripcion Area" name="descripcion">
    </div>
</div><br>
</form>
@stop