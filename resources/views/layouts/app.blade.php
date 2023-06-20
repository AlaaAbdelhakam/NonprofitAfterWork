<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alaa's Blog</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        * {
            font-weight: bold !important;
            font-family: cursive !important;
        }

        .navbar a:hover {
            color: #007bff !important;

        }

        .getout :hover {
            color: red !important;
        }
    </style>
</head>

<body style="background-image: url('images/loginpage.jpg');background-size:cover;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/index') }}">
                    Alaa's Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Authentication Links -->

                        {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                        {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        {{-- @else --}}
                        <li class="nav-item dropdown">
                            @auth


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                    style="color: #007bff;">
                                    {{ Auth::user()->name }} <span style="color: #007bff;" class="caret"></span>
                                </a>

                            @endauth

                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item getout" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    style="color: #007bff;">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">
                    @auth

                        <div class="col-lg-3">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item"><a href="{{ route('category.create') }}">Create Category</a>
                                </li>
                                <li class="list-group-item"><a href="{{ route('category.trashed') }}">Trashed Category</a>
                                </li>
                                <li class="list-group-item"><a href="{{ route('category.index') }}">Category</a></li>

                                <li class="list-group-item"><a href="{{ route('articles.create') }}">Create articles</a>
                                </li>
                                <li class="list-group-item"><a href="{{ route('articles.trashed') }}">Trashed articles</a>
                                </li>
                                <li class="list-group-item"><a href="{{ route('articles.index') }}">articles</a></li>
                                <li class="list-group-item"><a class="btn btn-primary" href="{{ route('index') }}">Retun to
                                        Front Page</a></li>
                                {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            </ul>
                        </div>


                    @endauth
                    <div class="col-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>


    </div>
</body>

</html>
