@extends('recursos.lyt-recursos')
@section('content-alquiler')
<form method="post" action="{{ url('/RecursosHumanos/Capacitacion/Guardar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Capacitacion</h3>
    </div>
    <div class="col-md-1 offset-4 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Guardar Capacitacion</button>        
    </div><br><br>
</div>
<h4>Capacitacion</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Tema Capacitacion</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo Venta" name="tema">
    </div>
    <div class="col-md-6">       
            <label for="">Fecha Inicio</label>       
            <input type="date" class="form-control" placeholder="Ingresar Codigo Venta" name="fechainicio">
            <label for="">Fecha Fin</label>       
        <input type="date" class="form-control" placeholder="Ingresar Codigo Venta" name="fechafin">
    </div>
</div><br>
</form>
@stop