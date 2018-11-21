@extends('admin.layout')
@section('title','Registrar Matrices Foda')

@section('section')
<i class="fas fa-building"></i> Matrices Foda</h1>
@stop()


@section('content')


  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ url('/admin/empresas')}}" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Listado de Matrices Foda
          </a>
        </div>
        <div class="col-md-3 offset-md-6">
          {{-- <input type="submit" form="form_add_empresa" /> --}}
          <button type="submit" form="form_add_foda" class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Registrar Matriz Foda
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
              <h4>Registrar Matriz Foda</h4>
            </div>
            <div class="card-body">
              <!-- @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif -->
            <form id="form_add_foda" method="post" action="{{ url('/admin/empresas/'.$empresa->id.'/fodas')}}">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @stop