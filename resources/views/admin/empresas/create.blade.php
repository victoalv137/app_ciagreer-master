@extends('admin.layout')
@section('title','Registrar Empresa')

@section('section')
<i class="fas fa-building"></i> Empresa</h1>
@stop()


@section('content')


  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ url('/admin/empresas')}}" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Listado de Empresas
          </a>
        </div>
        <div class="col-md-3 offset-md-6">
          {{-- <input type="submit" form="form_add_empresa" /> --}}
          <button type="submit" form="form_add_empresa" class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Registrar Empresa
          </button>
        </div>
        {{-- <div class="col-md-3">
          <a href="index.html" class="btn btn-danger btn-block">
            <i class="fas fa-trash"></i> Delete Post
          </a>
        </div> --}}
      </div>
    </div>
  </section>

  <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Registrar Empresa</h4>
            </div>
            <div class="card-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            <form id="form_add_empresa" method="post" action="{{ url('/admin/empresas')}}">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Razón Social</label>
                <input type="text" class="form-control" name="razon_Social" placeholder="Razón Social" value="{{ old('razon_Social') }}">
                </div>
                <div class="form-group">
                  <label for="title">RUC</label>
                  <input type="text" class="form-control" name="ruc" placeholder="RUC" value="{{ old('ruc') }}">
                </div>
                <div class="form-group">
                  <label for="body">Misión</label>
                  <textarea name="mision" class="form-control">{{ old('mision') }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Visión</label>
                  <textarea name="vision" class="form-control">{{ old('vision') }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Factor Diferenciador</label>
                  <textarea name="factor_Diferenciador" class="form-control">{{ old('factor_Diferenciador') }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Objetivos Estratégicos</label>
                  <textarea name="objetivos_Estrategicos" class="form-control">{{ old('objetivos_Estrategicos') }}</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @stop