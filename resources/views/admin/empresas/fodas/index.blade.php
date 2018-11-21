@extends('admin.layout')

@section('title','Listado de Matrices Foda')

@section('section')
<i class="fas fa-table"></i> Matrices Fodas
@stop()

@section('section-empresa')
<i class="fas fa-building"></i> {{ $empresa->razon_Social }}
@stop()

@section('content')

 <!-- ACTIONS -->
 <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/create') }}" class="btn btn-primary btn-block">
            <i class="fas fa-plus"></i> Crear Nueva Matriz Foda
          </a>
        </div>
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div> -->
      </div>
    </div>
  </section>


<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Listado de Matrices Foda</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Descripción</th>
                  <th>Fecha de Registro</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($fodas as $foda)
                <tr>
                  <td>{{ $foda->id}}</td>
                  <td>{{ $foda->descripcion }}</td>
                  <td>{{ $foda->created_at}}</td>
                  <td>
                    <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/matrizFoda')}}" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Ver Matriz Foda">
                      <i class="fas fa-table"> </i>
                    </a>
                    <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/factores')}}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Ver Factores">
                      <i class="fas fa-list"> </i>
                    </a>
                    <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/estrategias')}}" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Ver Estrategias">
                      <i class="fas fa-random"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Matrices</h3>
              <h4 class="display-4">
                <i class="fas fa-table"></i> {{ count($fodas) }}
              </h4>
              <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/')}}" class="btn btn-outline-light btn-sm">Ver</a>
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

          <!-- <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Usuarios</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 1
              </h4>
              <a href="#" class="btn btn-outline-light btn-sm">Ver</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>



@stop