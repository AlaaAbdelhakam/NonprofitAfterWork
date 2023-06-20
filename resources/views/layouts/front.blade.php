<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/animate/animate.css') }}"> 
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/vendors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/pages/chat-application.css') }}">

    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/custom-rtl.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" 
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/datedropper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/timedropper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/css-rtl/plugins/file-uploaders/dropzone.css') }}">
    <!-- END Page Level CSS-->
    
    {{-- <link rel="icon"
    href="{{ asset('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" 
    href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- END Custom CSS-->
    {{-- @notify_css --}}
    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
 
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        * {
            font-weight: bold !important;
            font-family: cursive !important;
        }

        .navbar a:hover {
            color: white !important;
        }

        .getout a:hover {
            color: red !important;
            background-color: transparent !important;
        }

        .badge a:hover {
            color: #007bff !important;
            background-color: transparent !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}" style="color:#007bff;">News</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}" style="color:#007bff;">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}" style="color:#007bff;">Main Profile <span
                                class="sr-only">(current)</span></a>
                    </li> --}}

                    @auth



                        <li class="nav-item active nav-link">
                            <h6 style="color: white;"> {{ Auth::user()->name }} </h6>
                        </li>
                        <li class="nav-item active nav-link">
                            <h6 style="color: white;text-decoration:none;"> <a href="{{ route('articles.index') }}"
                                    style="color: white;text-decoration:none;"> to dashboard</a> </h6>
                        </li>

                    @endauth
                </ul>

                <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="POST">
                    @csrf
                    <input class="form-control mr-sm-2" name="find" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                @auth


                    <div class="getout" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                            class="nav-item active nav-link" style="color: white;">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                @endauth
                @guest

                    <a class="nav-link nav-item" href="{{ route('login') }}">{{ __('Login to Dashboard') }}</a>
                @endguest


            </div>
    </nav>

    <main style="text-align: center;padding-top:70px;">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
