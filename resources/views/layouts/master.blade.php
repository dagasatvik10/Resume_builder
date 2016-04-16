<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
		

        @yield('script')
        @yield('link')
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <style type="text/css">
            .add_new{
                    display: block;
                    margin-left: 28px;
                    font-size: 13px;
                    margin-bottom: 20px;
                }
            .delete{
                
                margin-left: 28px;
                font-size: 13px;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top"  data-spy="affix" data-offset-top="650">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ url('/') }}>Resume Builder</a>
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
                               Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>              
        </div>          
    </nav>

 @yield('section')


	{{--<footer class="container-fluid panel-footer " style=" position: absolute;bottom: 0px; width: 100%; font-size: 17px; text-align:center; background-color: #151515;color: #888888;">
        <div >ResumeBuilder-2016 &copy; Software Incubator.</div>
    </footer>--}}
    </body>
</html>