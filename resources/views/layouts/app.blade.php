<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/fontawesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div id="app">

    <nav style="padding: 3px;" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{ url('/') }}">&nbsp;<span   class="fa fa-shopping-cart fa-lg"  alt=""></span>&nbsp; UltraHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">

            </ul>
            <div style="margin-right: 300px" class="col-sm-3  ">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right Side Of Navbar -->
            <ul  class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li style="margin-right: 25px;"><a class="nav-link" href="{{ url('/login') }}"><i style="margin-left: 5px;" class="fa fa-sign-in fa-lg"></i><br>Login</a></li>
                    <li style="margin-right: 25px;"> <a class="nav-link" href="{{ url('/customerRegister') }}"><i style="margin-left: 14px;" class="fa fa-user-plus fa-lg"></i><br>Register</a></li>

                @else
                    <li style="margin-right: 25px;" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li style="margin-right: 25px;">
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                <li style="float: right"><a style="margin-top: -5px;"  class="nav-link" href="{{ url('/customerRegister') }}"><i class="fa fa-language fa-lg"></i>&nbsp;
                        Translate</a></li>

            </ul>

        </div>
    </nav>


    @yield('content')
</div>

<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>

<script src="/js/bootstrap.min.js"></script>



</body>
</html>
