<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    @yield('estilo')
</head>
<body>
    <div id="app">

      <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
          <a class="navbar-brand" href="#">Papeleria</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role=""id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="Categoria.html">Articulos de oficina</a>
                  <a class="dropdown-item" href="Categoria.html">Articulos de Diseño</a>
                  <a class="dropdown-item" href="Categoria.html">Articulos de Contables</a>
                </div>
              </li>
                 <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role=""id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('/Proveedor')}}">Proveedor</a>
                  <a class="dropdown-item" href="{{url('/Rol')}}">Rol</a>
                  <a class="dropdown-item" href="{{url('/Edificio')}}">Edificio</a>
                  <a class="dropdown-item" href="{{url('/Salon')}}">Salón</a>
                  <a class="dropdown-item" href="{{url('/Privilegio')}}">Privilegio</a>
                </div>
              </li>
                 <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role=""id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendedor</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('/Marca')}}">Marca</a>
                  <a class="dropdown-item" href="{{url('/Categoria')}}">Categoría</a>
                  <a class="dropdown-item" href="{{url('/Producto')}}">Producto</a>
                  <a class="dropdown-item" href="{{url('/Tipo')}}">Tipo de producto</a>
                  <a class="dropdown-item" href="{{url('/Premio')}}">Premio</a>
                  <a class="dropdown-item" href="{{url('/Metodo')}}">Metódo de pago</a>
                  <a class="dropdown-item" href="{{url('/')}}">Detalle de venta</a>    
                    
                  
                </div>
              </li>
                 <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role=""id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Repartidor</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('/')}}">Detalle de Entrega</a>
                  <a class="dropdown-item" href="{{url('/')}}">Articulos de Diseño</a>
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Contacto</a>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
              @guest
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion <span class="sr-only"></span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Registrarte<span class="sr-only"></span></a>
              </li>
              @else
                  <li class="nav-item dropdown show">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endguest
            </ul>
          </div>
        </nav>
      </header>




        @yield('content')
    </div>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write("<script src='{{ asset('js/jquery-3.3.1.slim.min.js') }}'><\/script>")</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
</body>
</html>
