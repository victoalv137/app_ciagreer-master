@extends('admin.layout')
@section('title','Editar Empresa')

@section('section')
<i class="fas fa-building"></i> Matrices Foda</h1>
@stop()


@section('content')


  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Listado de Matrices Foda
          </a>
        </div>
        <div class="col-md-3 offset-md-3">
          {{-- <input type="submit" form="form_add_empresa" /> --}}
          <button type="submit" form="form_add_empresa" class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Guardar Cambios
          </button>
        </div>
        <div class="col-md-3">
          <a href="" class="btn btn btn-secondary btn-block">
            <i class="fas fa-times-circle"></i> Cancelar
          </a>
        </div>
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
              <h4>Editar Empresa seleccionada</h4>
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
            <form id="form_add_empresa" method="post" action="{{ url('/admin/empresas/'. $empresa->id .'/editar')}}">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Razón Social</label>
                  <input type="text" class="form-control" name="razon_Social" value="{{ old('razon_Social',$empresa->razon_Social) }}" >
                </div>
                <div class="form-group">
                  <label for="title">RUC</label>
                  <input type="text" class="form-control" name="ruc" value="{{ old('ruc',$empresa->ruc) }}" >
                </div>
                <div class="form-group">
                  <label for="body">Misión</label>
                  <textarea name="mision" class="form-control">{{ old('mision', $empresa->mision) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Visión</label>
                  <textarea name="vision" class="form-control">{{ old('vision', $empresa->vision) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Factor Diferenciador</label>
                  <textarea name="factor_Diferenciador" class="form-control">{{ old('factor_Diferenciador', $empresa->factor_Diferenciador) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="body">Objetivos Estratégicos</label>
                  <textarea name="objetivos_Estrategicos" class="form-control">{{ old('objetivos_Estrategicos', $empresa->objetivos_Estrategicos) }}</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @stop