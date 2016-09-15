<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{  asset('css/stylesheet.css') }}">

    <link rel="stylesheet" src="https://cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css">



@yield('link')
<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="navbar navbar-static" data-spy="affix" data-offset-top="650" id="navbar_top" role="navigation" style="margin-bottom: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand white" href={{ url('/') }}>Resume Builder</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li  data-toggle="modal" data-target="#login"><a class="white">Login</a></li>
                @else
                    <li>
                        <a class="white" href={{ route('user.dashboard') }}>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="white" href={{ url('/logout') }}>
                            Logout</a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>
</div>

@yield('section')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/5cd91b09e0.js"></script>
<script src={{ asset('js/laravel.js') }}></script>
@yield('script')

</body>
</html>
