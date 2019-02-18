<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>@yield('title')</title>
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src='js/jquerymin.js'></script>
        <script src='js/bootstrapmin.js'></script>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>			
        <script>
$(document).ready(function () {
    $(".dropdown-toggle").dropdown();
});
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/home') }}">CGP Dinosol</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/tiendas') }}">Tiendas</a></li>
                        <li><a href="{{ url('/macrolans') }}">Macrolanes</a></li>
                        <li><a href="{{ url('/ofal') }}">Oficinas/Almacenes</a></li>   
                        <li class="dropdown">
                            <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropright" role="button" aria-haspopup="true" aria-expanded="false">Herramientas<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/wiki') }}">WIKI CGP</a></li>
                                <li><a href="{{ url('/plantilla') }}">Generador Plantillas</a></li>
                            </ul>
                        </li>   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Migraciones<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropright" role="button" aria-haspopup="true" aria-expanded="false">Datos<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cargador.php?tipo=ftthinstaladas.php">Instaladas</a></li>
                                        <li><a href="cargador.php?tipo=ftthcitadas.php">Citadas</a></li>
                                        <li><a href="cargador.php?tipo=ftthpendientes.php">Pendientes</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="cargador.php?tipo=ftthanuladas.php">Anuladas</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="cargador.php?tipo=pedidos.php">Pedidos cliente</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropright" role="button" aria-haspopup="true" aria-expanded="false" >Voz<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cargador.php?tipo=ftthinstaladas.php">Instaladas</a></li>
                                        <li><a href="cargador.php?tipo=ftthcitadas.php">Citadas</a></li>
                                        <li><a href="cargador.php?tipo=ftthpendientes.php">Pendientes</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="cargador.php?tipo=ftthanuladas.php">Anuladas</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="cargador.php?tipo=pedidos.php">Pedidos cliente</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group navbar-left buscador">
                                    <input type="text" class="search form-control" placeholder="Buscar...">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>