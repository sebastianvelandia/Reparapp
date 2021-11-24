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
      <img src="images/herramientas-para-reparar.png" alt="reparapp" width="25" height="25" class="d-inline-block" >
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Ingresar</a>
        </li>
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
