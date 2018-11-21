@extends('admin.layout')

@section('title','Listado de Factores')

@section('section')
<i class="fas fa-list-alt"></i> Matriz Foda
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
        <div class="col-md-3">
          <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/estrategias')}}" class="btn btn-warning btn-block">
            <i class="fas fa-random"></i> Estrategias
          </a>
        </div>
        <div class="col-md-3">
          <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/factores')}}" class="btn btn btn-info btn-block">
            <i class="fas fa-list"></i> Factores
          </a>
        </div>
        <div class="col-md-3">
            <a href="{{url('/fodas/'.$foda->id.'/generarMatrizPdf')}}" class="btn btn btn-dark btn-block">
              <i class="far fa-file-pdf"></i></i> Generar Pdf
            </a>
          </div>
      </div>
    </div>
  </section>
  <section style="margin-bottom:50px">
    <div class="container " style="">
      <div class="row no-gutters" style=" min-height:30vh">
          <div class="col">
          </div>
          <div class="col">
            <div class="card h-100">
              <h5 class="card-header bg-success text-white text-center">Oportunidades</h5>
              <div class="card-body">
                @php 
                  $factores = $foda->factores->where('tipo_Factor','O');
                @endphp
                @foreach ($factores as $factor)
                <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}</p>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <h5 class="card-header bg-danger text-white text-center">Amenazas</h5>
              <div class="card-body">
                  @php 
                    $factores = $foda->factores->where('tipo_Factor','A');
                  @endphp
                  @foreach ($factores as $factor)
                  <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}</p>
                  @endforeach
              </div>
            </div>
          </div>
      </div>
      <div class="row no-gutters" style=" min-height:30vh">
          <div class="col">
            <div class="card h-100">
              <h5 class="card-header bg-primary text-white text-center">Fortalezas</h5>
              <div class="card-body">
                @php 
                  $factores = $foda->factores->where('tipo_Factor','F');
                @endphp
                @foreach ($factores as $factor)
                  <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}</p>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Estrategias FO</h5>
                  @php 
                  $estrategias = $foda->estrategias->where('tipo_Estrategia','FO');
          
                  
                  @endphp
                  @foreach ($estrategias as $estrategia)
                  @php 
                    $estrategiaFactores=$estrategia->factores
                  @endphp
                    <p class="card-text m-0">
                      {{ $estrategia->estrategia_Cod .' : '.$estrategia->descripcion.'('}}
                      @foreach ($estrategiaFactores as $estrategiaFactor)
                      {{ $estrategiaFactor->factor_Cod.','}}@endforeach)
                    </p>
                  @endforeach
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Estrategias FA</h5>
                  @php 
                  $estrategias = $foda->estrategias->where('tipo_Estrategia','FA');
                  @endphp
                  @foreach ($estrategias as $estrategia)
                  @php 
                    $estrategiaFactores=$estrategia->factores
                  @endphp
                    <p class="card-text m-0">
                      {{ $estrategia->estrategia_Cod .' : '.$estrategia->descripcion.'('}}
                      @foreach ($estrategiaFactores as $estrategiaFactor)
                      {{ $estrategiaFactor->factor_Cod.','}}@endforeach)
                    </p>
                  @endforeach
                </div>
            </div>
          </div>
      </div>
      <div class="row no-gutters" style=" min-height:30vh">
        <div class="col">
          <div class="card h-100">
            <h5 class="card-header bg-secondary text-white text-center">Debilidades</h5>
            <div class="card-body">
              @php 
                $factores = $foda->factores->where('tipo_Factor','D');
              @endphp
              @foreach ($factores as $factor)
                <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}</p>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Estrategias DO</h5>
                @php 
                  $estrategias = $foda->estrategias->where('tipo_Estrategia','DO');
                  @endphp
                  @foreach ($estrategias as $estrategia)
                  @php 
                    $estrategiaFactores=$estrategia->factores
                  @endphp
                    <p class="card-text m-0">
                      {{ $estrategia->estrategia_Cod .' : '.$estrategia->descripcion.'('}}
                      @foreach ($estrategiaFactores as $estrategiaFactor)
                      {{ $estrategiaFactor->factor_Cod.','}}@endforeach)
                    </p>
                  @endforeach
              </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Estrategias DA</h5>
                  @php 
                    $estrategias = $foda->estrategias->where('tipo_Estrategia','DA');
                  @endphp
                  @foreach ($estrategias as $estrategia)
                  @php 
                    $estrategiaFactores=$estrategia->factores
                  @endphp
                    <p class="card-text m-0">
                      {{ $estrategia->estrategia_Cod .' : '.$estrategia->descripcion.'('}}
                      @foreach ($estrategiaFactores as $estrategiaFactor)
                      {{ $estrategiaFactor->factor_Cod.','}}@endforeach)
                    </p>
                  @endforeach
                </div>
            </div>
          </div>
      </div>
    </div>
  </section>
@stop