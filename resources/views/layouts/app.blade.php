<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/accueil.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.js"></script>







    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'La vie en robe') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a class="navbar-brand" href="http://localhost/e-commerce2/public/"><img src="img/log.png" height="100" width="100"></a>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->pseudo }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer  class="container-fluid">

        <div id="footer-top" class="row justify-content-center px-5 pt-5">

            <!--Liens vers autres sites-->

            <ul class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">
                <h2>Nos Categories</h2>
                <li><a>MANTEAUX & VESTE</a></li>
                <li><a>ROBES & COMBIS</a></li>
                <li><a>PULLS & GILET</a></li>
                <li><a>ACCESSOIRE</a></li>
            </ul>

            <!--Liens téléchargement application-->

            <div class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">

                <div class="row justify-content-center">
                    <h2>Téléchargez l'application</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <img class="bouton-store" src="/e-commerce2/public/img/bouton_googleplay.jpg" alt="googleplay">
                    </div>
                    <div class="col-12 text-center">
                        <img class="bouton-store" src="/e-commerce2/public/img/bouton_appstore.png" alt="appstore">
                    </div>
                </div>

            </div>

            <!--Liens réseaux sociaux-->

            <div class="col-xl-4 col-md-4 col-sm-12 col-12 pb-4">
                <h2>Suivez-nous</h2>

                <div class="flex-logo">
                    <a><img src="/e-commerce2/public/img/logo_fb.png" alt="Facebook" class="rounded logo-social"></a>
                    <a><img src="/e-commerce2/public/img/logo_tweeter.png" alt="Facebook" class="rounded logo-social"></a>
                    <a><img src="/e-commerce2/public/img/logo_instagram.png" alt="Facebook" class="rounded logo-social"></a>
                </div>
            </div>

        </div>

        <!--Navigation-->

        <div id="nav-footer" class="row align-items-end">

            <ul class="col-12 nav justify-content-center align-self-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentions légales</a>
                </li>
                <li class="nav-item nav-borders">
                    <a class="nav-link" href="#">Foire aux questions</a>
                </li>
                <li class="nav-item nav-borders">
                    <a class="nav-link" href="#">Accessibilité</a>
                </li>
                <li class="nav-item nav-borders">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item nav-borders">
                    <a class="nav-link" href="#">Plan du site</a>
                </li>
            </ul>

        </div>


    </footer>

    <script type="text/javascript" src="scripts/scripts.js"></script>







</body>
</html>
