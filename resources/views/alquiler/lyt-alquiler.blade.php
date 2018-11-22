@extends('layouts.layoutmodulo')
@section('title','Alquiler')
@section('section','Alquiler')
@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-md-2">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/AlquilerVenta/Cotizacion') }}"><i class="fas fa-box"></i> Cotizacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/AlquilerVenta/Alquiler') }}"><i class="fas fa-archive"></i> Alquiler</a>
            </li>                       
          </ul>
        </div>
        <div class="col-md-10  mt-3 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">                                   
                   @yield('content-alquiler')                     
              </div>
            </div>
          </div>          
        </div>
  </div>
</div>
@stop
