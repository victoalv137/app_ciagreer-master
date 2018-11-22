@extends('layouts.layoutmodulo')
@section('title','Planeamiento')
@section('section','Planeamiento')
@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-md-2">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/Planeamiento/BombaSumergible') }}"><i class="fas fa-tint"></i> Bombas Sumergibles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Planeamiento/VentiladorAxial') }}"><i class="fas fa-archive"></i> Ventiladores Axiales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Planeamiento/Tablero') }}"><i class="fas fa-table"></i> Tableros</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Planeamiento/Repuesto') }}"><i class="fas fa-toolbox"></i> Repuesto</a>
              </li>           
          </ul>
        </div>
        <div class="col-md-10  mt-3 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">                                   
                   @yield('content-planeamiento')                     
              </div>
            </div>
          </div>          
        </div>
  </div>
</div>
@stop
