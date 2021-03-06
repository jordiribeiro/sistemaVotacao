<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Votação</title>

    <!-- Styles -->
    <!--  <link href="('css/app.css')" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                Votação
                            </a>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="nav nav-tabs">
                                    <li role="presentation"><a href="{!! url('painel') !!}">Painel<span class="sr-only">(current)</a></li>
                                    <li role="presentation"><a href="{!! url('painel/adicionar-tema') !!}">Criar Tema</a></li>
                                    <li role="presentation"><a href="{!! url('painel/meus-temas') !!}">Meus Temas</a></li>
                                    <li role="presentation"><a href="{!! url('painel/listar-temas') !!}">Listar Temas</a></li>
                                    <li role="presentation"><a href="{!! url('painel/listar-removidos') !!}">Listar Removidos</a></li>
                                    <li role="presentation"><a>Quantidade de Enquetes: <span id="qtd"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        setInterval(
        $.ajax({
            type:"GET",
            url: '/quantidade'
        }).done(function(msg){
            $('#qtd').append(msg)
        }),5000);
    </script> 
</body>

</html>