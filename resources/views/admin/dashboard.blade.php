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


        

        <div class="col-md-3">
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h4>Planeamiento y control</h4>
              <h4 class="display-4">
                <i class="fas fa-building"></i>
              </h4>
              <a href="{{url('/Planeamiento')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
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
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Alquiler y Ventas</h3>
              <h4 class="display-4">
                <i class="fas fa-box-open"></i>
              </h4>
              <a href="{{url('/AlquilerVenta')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Presupuesto</h3>
              <h4 class="display-4">
                <i class="fas fa-dollar-sign"></i>
              </h4>
              <a href="{{url('/admin/Seguridad')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-info text-white mb-3">
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
          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Mantemiento</h3>
              <h4 class="display-4">
                <i class="fas fa-cogs"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Seguridad</h3>
              <h4 class="display-4">
              <i class="fas fa-lock"></i>
              </h4>
              <a href="{{url('/Seguridad')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h5>Requerimientos de TI</h5>
              <h4 class="display-4">
                <i class="fas fa-laptop"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Soporte de TI</h3>
              <h4 class="display-4">
                <i class="fas fa-database"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center text-white bg-dark mb-3">
            <div class="card-body">
              <h5>Gestion de Almacenamiento</h5>
              <h4 class="display-4">
                <i class="fas fa-server"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center text-white bg-dark mb-3">
            <div class="card-body">
              <h3>Gestion de Pagos</h3>
              <h4 class="display-4">
                <i class="far fa-building"></i>r
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center text-white bg-dark mb-3">
            <div class="card-body">
              <h3>Gestion de Recursos</h3>
              <h4 class="display-4">
                <i class="far fa-clock"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-light mb-3">
            <div class="card-body">
              <h3>Facturacion</h3>
              <h4 class="display-4">
                <i class="fas fa-hand-holding-usd"></i>
              </h4>
              <a href="{{url('/admin')}}" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div>
          {{-- @endcan --}}
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-light mb-3">
            <div class="card-body">
              <h3>Cobranza</h3>
              <h4 class="display-4">
                <i class="fas fa-hand-holding-usd"></i>
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