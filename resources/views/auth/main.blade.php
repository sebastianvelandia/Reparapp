<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/herramientas-para-reparar.png" alt="reparapp" width="25" height="25" class="d-inline-block">
        ReparApp
      </a>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Consultar Orden</a>
        </li>
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('taller.index') }}">Talleres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('callcenter.index') }}">Call Centers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}">Clientes</a>
          </li>
        </ul>
        @can('agente.index')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Empleados
          </a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('agente.index') }}">Agentes</a></li>
            <li><a class="dropdown-item" href="{{ route('tecnico.index') }}">Tecnicos</a></li>
            <li><a class="dropdown-item" href="{{ route('operador.index') }}">Operadores</a></li>
            <li><a class="dropdown-item" href="{{ route('user.index') }}">Usuarios</a></li>
          </ul>
        </li>
        @endcan
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Cerrar sesion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>

<body>
  <div>
    <img src="/images/reparacion-de-electrodomesticos.png" alt="Reparapp" width="100%" height="50%" class="bg-image">
  </div>
</body>

<footer>

</footer>

</html>