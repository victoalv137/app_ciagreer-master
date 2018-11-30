@extends('recursos.lyt-recursos')
@section('content-Recursos')
<form method="post" action="{{ url('/RecursosHumanos/Empleado/'.$empleado->id.'/Actualizar')}}">
    {{ csrf_field() }}
<div class="row">
    <div class="col-md-6">    
        <h3>Actualizar Empleado</h3>
    </div>
    <div class="col-md-1 offset-5 text-right"> 
            <button type="submit" class="btn btn-success text-right"><i class="far fa-save"></i> Actualizar</button>          
    </div><br><br>
</div>
<h4>Empleado</h4>
<div class="row">
    <div class="col-md-6">
        <label for="">Nombre Completo</label>       
    <input type="text" class="form-control" value={{$empleado->nombres}} placeholder="Ingresar Nomnbre Comercial" name="nombres"><br>
        <label for="">DNI</label>       
        <input type="number" min="1" step="1" class="form-control" value={{$empleado->dni}}  placeholder="Ingresar RUC" name="dni"><br>
        <label for="">Sexo</label>       
        <select class="form-control" name="sexo">           
                 <option value="F">Femenino</option>   
                 <option value="M">Masculino</option>                                  
         </select><br>
         <label for="">Hoja de Vida (CV)</label>       
        <input type="file" class="form-control"  name="cv"><br>
        <label for="">Area</label>       
        <select class="form-control" name="area">
                @foreach ($areas as $area)      
                 <option value="{{$area->id}}">{{$area->nombre}}</option>  
                @endforeach                                                   
         </select><br>
    </div>
    <div class="col-md-6">       
        <label for="">Apellidos</label>       
        <input type="text" class="form-control" value={{$empleado->apellidos}}  placeholder="Ingresar Telefono" name="apellidos"><br>
        <label for="">Direccion</label>       
        <input type="text" class="form-control"  value={{$empleado->direccion}} placeholder="Ingresar direccion" name="direccion"><br>  
        <label for="">Telefono</label>       
        <input type="number" min="1" step="1" class="form-control"  value={{$empleado->telefono}} placeholder="Ingresar direccion" name="telefono"><br>  
        <label for="">Fecha Nacimiento</label>       
        <input type="date" class="form-control"  value={{$empleado->fechaNacimiento}} placeholder="Ingresar direccion" name="fecha">  
    </div>
</div>

</form>
@stop