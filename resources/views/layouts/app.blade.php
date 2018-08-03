<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <header class="desktop-header hidden-xs hidden-sm">
            <div class="container-fluid">
                <div class="row flex-centered">
                    <div class="col-md-3 first-block">
                        <a class="projects" href="{{ url('/project-listing') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="img" style="width: 32px"/>
                            <span style="color: #77cbfa;font-weight: 400;font-family: 'proxima_novalight';font-style: normal;font-size: 19px;padding-left: 8px">Aircraft Managment System</span>
                        </a>
                    </div>
                    <div class="col-md-9">
                        <nav>
                            <ul class="nav navbar-nav navbar-right flex-not-centered float-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a style="padding: 18px 30px;" href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li>
                                        <a href="{{ url('/project-listing') }}" class="active">
                                            <span style="position: relative;top: 5px">AIRCRAFT</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a style="padding: 5px 0 5px 10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            @if(Auth::user()->profile_pic)
                                                <img class="user-profile-pic" src="{{ Auth::user()->profile_pic }}"
                                                     alt="image"
                                                     style="width: 36px; height:36px; border-radius:50%"/>
                                            @else
                                                <img class="user-profile-pic" src="{{ asset('/img/user-default.png') }}"
                                                     style="width: 36px; height:36px; border-radius:50%" alt="image">
                                            @endif
                                            <span style="top: 0">{{ strtoupper(Auth::user()->name) }}</span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); logoutFn()">
                                                    Logout
                                                </a>

                                                <form class="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


        </header>
        <main class="py-0">
            @yield('content')
        </main>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    function logoutFn(){
        $('.logout-form').trigger('submit');
    }
</script>

</html>
