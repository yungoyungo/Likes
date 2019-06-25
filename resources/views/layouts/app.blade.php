<!DOCTYPE html>
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
    <link href="{{ asset('css/fade.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fileInput.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/fade.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fileInput.js') }}"></script>
</head>
<body class="fadeout">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
            <div class="container">
                @auth
                    <a class="navbar-brand" href="{{ route('user.items.index', ['user' => auth()->user()]) }}" style="font-size:2rem; letter-spacing:6px;">
                        {{ config('app.name', 'Laravel') }}
                        <!-- <img src="{{ asset('images/suko.png') }}", alt="suko_logo" class="img-fluid" style="height:2rem;"> -->
                    </a>
                @endauth
                @guest
                    <a class="navbar-brand" href="{{ route('login') }}" style="font-size:2rem; letter-spacing:6px;">
                        {{ config('app.name', 'Laravel') }}
                        <!-- <img src="{{ asset('images/suko.png') }}", alt="suko_logo" class="img-fluid" style="height:2rem;"> -->
                    </a>
                @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>@yield('navbar_content')</li>
                        <li><a class="navbar-brand" href="/user/1/items">user1</a></li>
                        <li><a class="navbar-brand" href="/user/2/items">user2</a></li>
                        <li><a class="navbar-brand" href="/user/3/items">user3</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.items.index', ['user' => auth()->user()]) }}">
                                        {{ __('マイページ') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
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

        <main class="container py-4">
            @if ($errors->any())
                <div class="alert alert-danger w-50 mx-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
