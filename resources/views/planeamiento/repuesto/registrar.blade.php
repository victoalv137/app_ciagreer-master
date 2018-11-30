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
<form method="post" action="{{ url('/Planeamiento/Repuesto/Guardar')}}">
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Registro Repuesto</h3>
    </div>
    <div class="col-md-1 offset-5 text-right">        
        <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i>Guardar</button>        
    </div><br><br>
</div>
<h4>Repuesto</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Codigo</label>       
        <input type="text" class="form-control" placeholder="Ingresar Codigo" name="codigo">
    </div>
    <div class="col-md-6">       
            <label for="">Descripcion</label>       
            <input type="text" class="form-control" placeholder="Ingresar Descripcion" name="descripcion">
    </div>
</div><br>
<div class="row">
        <div class="col-md-6">
            <label for="">Marca</label>       
            <select class="form-control" name="marca">
                    <option value="EBARA">EBARA</option>
                    <option value="TSURUMI">TSURUMI</option>
                    <option value="GRINDEX">GRINDEX</option>
                    <option value="HIDRO-PUMP">HIDRO-PUMP</option>
                    <option value="FLYGT">FLYGT</option>
            </select><br>
        </div>
        <div class="col-md-6">
            <label for="">Costo</label>       
             <input type="number" min="1" step="any" class="form-control" placeholder="Ingresar Costo" name="costo">
        </div>
        
</div>
</form>
@stop