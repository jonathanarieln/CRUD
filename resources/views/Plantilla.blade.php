
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ejemplo de CRUD en Laravel">
    <meta name="author" content="Cons Sorto">
    <link rel="icon" href="favicon.ico">

    <title>@yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('inicio')}}">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('Proveedores')}}">Proveedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ProveedoresNuevo')}}">Nuevo Proveedor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Marcas')}}">Marcas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('MarcasNuevo')}}">Nueva Marca</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">@yield('titulo-principal')</h1>
            <p>@yield('descripcion-titulo-principal')</p>
            @section('boton-principal')
            <p><a class="btn btn-primary btn-lg" href="@yield('enlace-boton-principal')" role="button">
                        @yield('texto-boton-principal') &raquo;</a></p>
            @show
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>@yield('titulo-columna1')</h2>
                @section('contenido-columna1')
                    <p>Contenido de la columna 1. </p>
                @show
                @section('boton-columna1')
                <p><a class="btn btn-secondary" href="@yield('enlace-boton-columna1')" role="button">
                        Seguir... &raquo;</a></p>
                @show
            </div>
            <div class="col-md-8">
                <h2>@yield('titulo-columna2')</h2>
                @section('contenido-columna2')
                    <p>Contenido de la columna 2. </p>
                @show
                @section('boton-columna2')
                    <p><a class="btn btn-secondary"  href="@yield('enlace-boton-columna2')" role="button">
                            Seguir... &raquo;</a></p>
                @show
            </div>
        </div>
        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>@yield('pie')</p>
</footer>

</body>
</html>