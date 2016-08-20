<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->

    <link rel="stylesheet" type="text/css" href="{{  asset('css/stylesheet.css') }}">

    <script src="https://use.fontawesome.com/5cd91b09e0.js"></script>


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
                        <a class="white" href={{ url('/logout') }}><span class="fa fa-btn fa-sign-out"></span>
                            Logout</a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>
</div>
<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login/Register</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#loginform">Login</a></li>
                    <li><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div id="loginform" class="tab-pane fade in active">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login')    }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label style="font-size: 15px;">
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-4">
                                    <button type="submit" class="btn" style="background-color: #9E9E9E;">
                                        <i class="fa fa-btn fa-sign-in"></i> &nbsp; &nbsp; Login
                                    </button>
                                </div>
                                <div class="col-md-1">or</div>
                                <div class="col-md-3">
                                    <a class="btn " style="background-color: #9E9E9E;" href='{{ url('auth/fb') }}'>
                                        Login with Facebook
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <a class="btn btn-link disabled" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="register" class="tab-pane fade">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/       register') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="submit" class="btn" style="background-color: #9E9E9E;">
                                        <i class="fa fa-btn fa-user"></i> &nbsp; &nbsp;Register
                                    </button>
                                </div>
                                <div class="col-md-1">or</div>
                                <div class="col-md-5">
                                    <a class="btn " style="background-color: #9E9E9E;" href='{{ url('auth/fb') }}'>
                                        Login with Facebook
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('section')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src={{ asset('js/laravel.js') }}></script>
@yield('script')
</body>
</html>
