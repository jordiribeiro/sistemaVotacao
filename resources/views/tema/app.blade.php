<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Painel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }} - Painel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
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
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
          <div class="col-md-3">
            <ul class="list-group">
              <li class="list-group-item"><h4 class="text-center">Menu</h4></li>
              @if(url()->current()!=url('/painel'))
              <li class="list-group-item"><a href="{!! url('painel') !!}">Painel</a></li>
              @endif
              <li class="list-group-item"><a href="{!! url('/') !!}">Voltar Para O Site</a></li>
              <li class="list-group-item"><a href="{!! url('painel/adicionar-tema') !!}">Criar Tema</a></li>
              @if(Auth::user()->level>=0)
                <li class="list-group-item"><a href="{!! url('painel/meus-temas') !!}">Meus Temas</a></li>
              @endif

              @if(Auth::user()->level>=1)
                <li class="list-group-item"><a href="{!! url('painel/listar-temas') !!}">Listar Temas</a></li>
                <li class="list-group-item"><a href="{!! url('painel/listar-removidos') !!}">Listar Removidos</a></li>
              @endif
            </ul>
          </div>
          <div class="col-md-9">
            @yield('content')
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>