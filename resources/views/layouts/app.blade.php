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
     <link rel="stylesheet" type="text/css" href="{{  asset('css/stylesheet.css') }}">

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
    <nav class="navbar navbar-fixed-top"  data-spy="affix" data-offset-top="650">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand white" href='{{ route('home') }}'>Resume Builder</a>
            </div>      
        </div>          
    </nav>

    @yield('content')

    <!--<div class="container" id="contact">
        <div class="row">
            <div class="col-md-4">
                <p>Copyright &copy; 2016.All right reserved.</p>
            </div>
            <div class="col-md-4 center-block">
                <p style="text-align:center;">Powered By - Software Incubator.</p>
            </div>
            <div class="col-md-4">
                <a  style="text-decoration: none;" href={{ url('http://silive.in/') }}><span class="pull-right"><img src="img/si_logo.png" >Visit Us</span></a>
            </div>
        </div>
    </div>-->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
