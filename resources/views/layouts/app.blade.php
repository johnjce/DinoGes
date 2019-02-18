<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>@yield('title')</title>
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src='js/app.js'></script>
        <script src='js/jquerymin.js'></script>
        <script src='js/bootstrapmin.js'></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>

$(document).ready(function () {
    $(".dropdown-toggle").dropdown();

    $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {'containsi': function (elem, i, match, array) {
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function (e) {
            $(this).attr('visible', 'false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function (e) {
            $(this).attr('visible', 'true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if (jobCount == '0') {
            $('.no-result').show();
        } else {
            $('.no-result').hide();
        }
    });
    
});
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="{{ url('/home') }}">CGP Dinosol</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tiendas') }}">Tiendas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/macrolans') }}">Macrolanes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ofal') }}">Oficinas/Almacenes</a></li>   
                    <li class="nav-item dropdown bg-dark">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Herramientas<span class="caret"></span></a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="nav-link" href="{{ url('/wiki') }}">WIKI CGP</a></li>
                            <li><a class="nav-link" href="{{ url('/plantilla') }}">Generador Plantillas</a></li>
                        </ul>
                    </li>   
                    <li class="nav-item dropdown bg-dark">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Migraciones<span class="caret"></span></a>
                        <ul class="dropdown-menu bg-dark">
                            <li class="nav-item dropdown-submenu bg-dark">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Datos<span class="caret"></span></a>
                                <ul class="dropdown-menu bg-dark">
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthinstaladas.php">Instaladas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthcitadas.php">Citadas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthpendientes.php">Pendientes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthanuladas.php">Anuladas</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=pedidos.php">Pedidos cliente</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown-submenu bg-dark">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Voz<span class="caret"></span></a>
                                <ul class="dropdown-menu bg-dark">
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthinstaladas.php">Instaladas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthcitadas.php">Citadas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthpendientes.php">Pendientes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=ftthanuladas.php">Anuladas</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="cargador.php?tipo=pedidos.php">Pedidos cliente</a></li>
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