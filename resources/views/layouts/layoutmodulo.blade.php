<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>@yield('title')</title>


    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Main CSS-->



</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container-fluid">
      <a href="{{ url('/admin/')}}" class="navbar-brand">Sistema CIA GREER</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
          <a href="{{ url('/admin')}}" class="nav-link active">Inicio</a>
          </li>
          {{-- <li class="nav-item px-2">
            <a href="{{ url('/admin/empresas')}}" class="nav-link">Empresas</a>
          </li> --}}
          @can('admin.register')
            <li class="nav-item px-2">
              <a href="{{url('/admin/register')}}" class="nav-link">Usuarios</a>
            </li>
          @endcan
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Bienvenido {{Auth::user()->name}}
            </a>
            {{-- <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Perfil
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Configuración
              </a>
            </div> --}}
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-user-times"></i> Salir
              <form id="logout-form" action="{{ route('logout') }}" 
              method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1>
            @yield('section')
          </h1>
        </div>
        <div class="col-md-6 align-self-center text-right">
          <h2>
            @yield('section-empresa','')
          </h2>
        </div>
      </div>
    </div>
  </header>

 @yield('content')

  <!-- FOOTER -->
  <!-- <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Blogen
          </p>
        </div>
      </div>
    </div>
  </footer> -->


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>


  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

      $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
</body>

</html>    
    
    