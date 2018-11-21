@extends('admin.layout')

@section('title','Listado de Factores')

@section('section')
<i class="fas fa-list-alt"></i> Factores de la Matriz Foda
@stop()

@section('section-empresa')
<i class="fas fa-building"></i> {{ $empresa->razon_Social }}
@stop()

@section('content')
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/')}}" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Listado de Fodas
          </a>
        </div>
        <div class="col-md-3 offset-md-3">
          <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/estrategias')}}" class="btn btn-success btn-block">
            <i class="fas fa-random"></i> Estrategias
          </a>
        </div>
        <div class="col-md-3">
          <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/matrizFoda')}}" class="btn btn btn-info btn-block">
            <i class="fas fa-table"></i> Matriz Foda
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row" id="elementos">
          <div class="col-md-9">
            <factores-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt="{{ json_encode('F') }}" :ttl="{{ json_encode('Fortalezas') }}">
            </factores-component>
            <hr>
            <factores-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt="{{ json_encode('O') }}" :ttl="{{ json_encode('Oportunidades') }}">
              </factores-component>
            <hr>
            <factores-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt="{{ json_encode('D') }}" :ttl="{{ json_encode('Debilidades') }}">
              </factores-component>
            <hr>
            <factores-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt="{{ json_encode('A') }}" :ttl="{{ json_encode('Amenazas') }}">
              </factores-component>
          </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Fortalezas</h3>
              <h4 class="display-4">
                <i class="fas fa-shield-alt"></i> {{ count($factores->where('tipo_Factor','F')) }}
              </h4>
              <a href="" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
              <div class="card-body">
                <h3>Oportunidades</h3>
                <h4 class="display-4">
                  <i class="fas fa-lightbulb"></i> {{ count($factores->where('tipo_Factor','O')) }}
                </h4>
                <a href="#" class="btn btn-outline-light btn-sm">Ver</a>
              </div>
          </div>
          
          <div class="card text-center bg-secondary text-white mb-3">
            <div class="card-body">
              <h3>Debilidades</h3>
              <h4 class="display-4">
                <i class="fas fa-briefcase-medical"></i> {{ count($factores->where('tipo_Factor','D')) }}
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>

          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Amenazas</h3>
              <h4 class="display-4">
                <i class="fas fa-user-secret"></i> {{ count($factores->where('tipo_Factor','A')) }}
              </h4>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
@stop