@extends('layouts.layoutmodulo')
@section('title','Recursos Humanos')
@section('section','Recursos Humanos')
@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-md-2">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/RecursosHumanos/Empleados') }}"><i class="fas fa-male"></i> Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/RecursosHumanos/Capacitacion') }}"><i class="fas fa-graduation-cap"></i> Capacitacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/RecursosHumanos/Areas') }}"><i class="far fa-list-alt"></i> Areas</a>
            </li>                                  
          </ul>
        </div>
        <div class="col-md-10  mt-3 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">                                   
                   @yield('content-Recursos')                     
              </div>
            </div>
          </div>          
        </div>
  </div>
</div>
@stop
