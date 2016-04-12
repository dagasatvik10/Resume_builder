<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        @yield('script')
        @yield('link')
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        {{--<!--<nav>--}}
            {{--<div class="nav-wrapper teal lighten-2">--}}
                {{--<a href={{ route('user.dashboard') }} class="" style="margin-left: 80px;">--}}
                    {{--Create, Maintain and publish your CV's for free--}}
                {{--</a>--}}
                {{--<ul id="nav-mobile" class="right hide-on-med-and-down">--}}
                    {{--<li>{{ $user->name }}</li>--}}
                    {{--<li><a href={{ url('/logout') }}>Logout</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>-->--}}
        <nav class="navbar navbar-fixed-top" style="font-size: 20px; background: repeating-linear-gradient( 45deg,
      #000040,
      #191953 2px,
      #000040 2px,
      #465298 2px);">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Resume Builder</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href={{ url('/login') }}>Login</a></li>
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
                               Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>              
        </div>          
    </nav>

        @yield('section')

        @yield('footer')
    </body>
</html>