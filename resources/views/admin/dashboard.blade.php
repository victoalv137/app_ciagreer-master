@extends('admin.layout')

@section('title','Inicio')
@section('section','Inicio')

@section('content')
 <!-- ACTIONS -->
 <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          {{-- <a href="{{ url('admin/empresas/create')}}" class="btn btn-primary btn-block">
            <i class="fas fa-plus"></i> Agregar Empresa
          </a> --}}
        </div>
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div> -->
        @can('admin.register')
          {{-- <div class="col-md-3">
          <a href="{{url('/admin/register')}}" class="btn btn-warning btn-block" >
              <i class="fas fa-plus"></i> Agregar Usuario
            </a>
          </div> --}}
        @endcan
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        {{-- <div class="col-md-9">
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
                  <th>Ver detalle</th>
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
                    <a href="{{ url('admin/empresas/')}}" class="btn btn-outline-primary">>>Ver Detalle</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div> --}}
        <div class="col-md-3">
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Inventario</h3>
              <h4 class="display-4">
                <i class="fas fa-box-open"></i> 
              </h4>
              <a href="{{url('/Planeamiento')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Seguridad</h3>
              <h4 class="display-4">
              <i class="fas fa-lock"></i>
              </h4>
              <a href="{{url('/Seguridad')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
        </div>
          <!-- <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i> 4
              </h4>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div> -->
          {{-- @can('admin.register') --}}
        <div class="col-md-3">
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Alquiler y Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-box-open"></i>
              </h4>
              <a href="{{url('/AlquilerVenta')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Seguridad</h3>
              <h4 class="display-4">
              <i class="fas fa-lock"></i>
              </h4>
              <a href="{{url('/admin/Seguridad')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-secondary text-white mb-3">
            <div class="card-body">
              <h4>Recursos Humanos</h4>
              <h4 class="display-4">
              <i class="fas fa-address-book"></i>
              </h4>
              <a href="{{url('/RecursosHumanos/Empleados')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-cog"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
      </div>
    </div>
  </section>
@stop