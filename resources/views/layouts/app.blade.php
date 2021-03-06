<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="navbar-brand" id="button-forum" href="{{ route('articles.index') }}">
                                <img src="https://icon-library.com/images/quest-icon/quest-icon-3.jpg" width="10" height="30" class="d-inline-block " alt="" loading="lazy">
                                FORUM
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="navbar-brand"  href="{{ route('menu.lore') }}" >
                                <img src="https://pm1.narvii.com/6425/d2f5119049e5c1edb11fd00c91d37e27eccc1363_00.jpg" class="d-inline-block navbarImage" alt="" loading="lazy">
                                LORE
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <img src="https://www.wowisclassic.com/static/images/menu/guides.4b9da26c7b31.png"  class="d-inline-block navbarImage" alt="" loading="lazy">
                                GUIDES
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('menu.races') }}">{{ __('RACES') }}</a>
                                <a class="dropdown-item" href="{{ route('menu.classes') }}">{{ __('CLASSES') }}</a>
                                <a class="dropdown-item" href="{{ route('menu.howToStart') }}">{{ __('HOW TO START') }}</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('user.profile') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    @can('create', \App\Models\User::class)
                                        <a class="dropdown-item " href="{{ route('user.index') }}">
                                            {{ __('List of users') }}
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

        </nav>

        <div class="logo"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
