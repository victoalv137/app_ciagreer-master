@extends('layouts.app')

@section('content')
   
     <!-- LOGIN -->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Ingreso de Usuarios</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">Correo Electrónico</label>
                  <input class="form-control" placeholder="Correo Electrónico" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input class="form-control" placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-primary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
