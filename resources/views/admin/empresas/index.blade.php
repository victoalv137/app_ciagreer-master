@extends('admin.layout')

@section('title','Listado de Empresas')

@section('section')
<i class="fas fa-building"></i> Empresas</h1>
@stop()

@section('content')
<!-- SEARCH -->
<section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
          <div class="col-md-3">
              <a href="{{url('/admin/empresas/create') }}" class="btn btn-primary btn-block" data-toggle="" data-target="">
                <i class="fas fa-plus"></i><span> Registrar Empresa</span>
              </a>
            </div>
        {{-- <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Posts...">
            <div class="input-group-append">
              <button class="btn btn-primary">Search</button>
            </div>
          </div>
        </div> --}}
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
              <h4>Listado de Empresas</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Razon Social</th>
                  <th>Ruc</th>
                  <th>Fecha de Registro</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($empresas as $empresa)
                <tr>
                  <td>{{ $empresa->id}}</td>
                  <td>{{ $empresa->razon_Social}}</td>
                  <td>{{ $empresa->ruc}}</td>
                  <td>{{ $empresa->created_at}}</td>
                  <td>
                    <form method="post" action="{{ url('/admin/empresas/'.$empresa->id.'/delete') }}">
                      {{ csrf_field() }}
                      <a  href="{{ url('/admin/empresas/'.$empresa->id.'/ver') }}"  class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver Empresa">
                        <i class="fas fa-info-circle"> </i>
                      </a>
                      <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas') }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Ver Matrices Foda">
                        <i class="fas fa-table"> </i>
                      </a>
                      <a href="{{ url('/admin/empresas/'.$empresa->id.'/editar') }}" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Editar Empresa">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="submit" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Empresa">
                        <i class="far fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- PAGINATION -->
            
            <nav class="ml-4">
              {{ $empresas->links('vendor.pagination.bootstrap-4') }}
            </nav>


            {{-- <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav> --}}

          </div>
        </div>
      </div>
    </div>
  </section>

  @stop