<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{  asset('css/stylesheet.css') }}">

        @yield('link')
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <style type="text/css">
            .add_new{
                    display: block;
                    }
            .section{
                height: 55%;
                overflow-y:auto;
                overflow-x:hidden; 
                 }
            @media only screen and (max-width: 1200px) {
                .section_subsection{
                    margin-bottom: 10px;
                }
            .delete{
                padding: 1px;
                margin-left: 28px;
                font-size: 13px;
            }
            #github_button{

            }
            .section  {
                height: 50%;
                overflow-y:auto;
                overflow-x:hidden;
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

		<div id="previewModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" style="padding: 50px;">
					{!! Form::open(['route' => ['resume.show',@$resume->id]]) !!}
					<div class="form-group">
						<select class="form-control" name="resume_design">
							<option value="1">Simple</option>
							<option value="2">Business</option>
						</select>
					</div>
					<div class="form-group">
						{!! Form::submit('Preview',['class' => 'btn btn-info']) !!}
					</div>
					{!! Form::close() !!}
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="downloadModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" style="padding: 50px;">
					{!! Form::open(['route' => ['resume.download',@$resume->id]]) !!}
					<div class="form-group">
						<select class="form-control" name="resume_design">
							<option value="1">Simple</option>
							<option value="2">Business</option>
						</select>
					</div>
					<div class="form-group">
						{!! Form::submit('Download',['class' => 'btn btn-info']) !!}
					</div>
					{!! Form::close() !!}
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<script src={{ asset('js/laravel.js') }}></script>
		@yield('script')
    </body>
</html>
