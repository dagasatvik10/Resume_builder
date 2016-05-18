<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RB | Login</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <!--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ elixir('css/stylesheet.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-fixed-top"  data-spy="affix" data-offset-top="650">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Resume Builder</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href={{ url('/login') }}>Login</a></li>
                        <li><a href={{ url('/register') }}>Register</a></li>
                    @else
                        <li class="dropdown">
                           <a href={{ route('user.dashboard') }} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} 
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href={{ route('user.dashboard') }}>Dashboard</a></li>
                                <li><a href={{ url('/logout') }}>
                                        <i class="fa fa-btn fa-sign-out"></i>
                               Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>              
        </div>          
    </nav>

    @yield('content')

    <!--<footer class="container-fluid panel-footer " style="position: static;
    bottom: 0px; width: 100%; font-size: 17px; text-align:center; background-color: #151515; color: #888888;">
        <div>ResumeBuilder-2016 &copy; Software Incubator.</div>-->
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
