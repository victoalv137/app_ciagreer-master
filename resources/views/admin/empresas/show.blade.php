@extends('admin.layout')

@section('title', $empresa->razon_Social )

@section('section')
<i class="fas fa-building"></i> Empresa</h1>
@stop()

@section('content')
<!-- SEARCH -->
<section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
          <div class="col-md-3">
            <a href="{{url('/admin/empresas') }}" class="btn btn-light btn-block">
              <i class="fas fa-arrow-left"></i><span> Ir al listado de Empresas</span>
            </a>
          </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>{{$empresa->razon_Social}}</h4>
            </div>
            <div class="card-body">
              <h5 class="card-title">RUC</h5>
              <p class="card-text">{{$empresa->ruc}}</p>
              <h5 class="card-title">Misión</h5>
              <p class="card-text">{{$empresa->mision}}</p>
              <h5 class="card-title">Visión</h5>
              <p class="card-text">{{$empresa->vision}}</p>
              <h5 class="card-title">Factor Diferenciador</h5>
              <p class="card-text">{{$empresa->factor_Diferenciador}}</p>
              <h5 class="card-title">Objetivos Estratégicos</h5>
              <p class="card-text">{{$empresa->objetivos_Estrategicos}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @stop