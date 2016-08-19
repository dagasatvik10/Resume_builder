<!DOCTYPE html>
<html>
<head>
	<title>Resume Builder | HomePage</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!--fontawsome CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!--google fonts-->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Inknut+Antiqua:400,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">


</head>
<body >
	<!--fixed navigation-->

	<!-- <nav class="navbar  navbar-static" role="navigation">
>>>>>>> 1089e61492e79364d11b27a1f5caf1d38e0ac04c
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
					<li><a class="white" href="#contact"> Contact Us</a></li>
					@if (Auth::guest())
                     <li  data-toggle="modal" data-target="#login"><a class="white">Login</a></li>				      
                    @else
                        <li class="dropdown">
                           <a class="white" href={{ route('user.dashboard') }} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
	</nav> -->
	<div class="navbar_scroll" style="background-image: url(img/land-bg.jpg); background-size:cover;">
		<div class="container">
			<div class="row pull-right top-fix">
				<div id="register" class="inline">
					<button>
						<span class="fa fa-pencil register-icon"></span><span class="register-text">Register</span>
					</button>
				</div>
				<div id="login" class="inline">
					<button>
						<span class="fa fa-user login-icon"></span><span class="login-text">Login</span>
					</button>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="content-land" >
			<div class="col-md-12 landing">
				<h1 class="head-name">RESUME BUILDER
				<p id="subhead-name">Powered by Software Incubator</p></h1>

				<div style="font-size:20px;letter-spacing: 1.5px; padding-top:20px;">
				Create a standout resume in minutes.
				</div>
				<div style="font-size:16px; letter-spacing: 1.5px;">
					Easily create professional resumes.
				</div>
				<a class="btn" href={{ url('/dashboard') }} id="create_button">Create Resume Now</a>
			</div>
			<!-- <div class="col-md-6" style="margin-top: 5%;">
				<div class="col-sm-4">
					<img src="img/a.png" class="land_temp img-responsive">
				</div >
				<div  class="col-sm-4">
					<img src="img/b.png" class="land_temp img-responsive">
				</div>
				<div  class="col-sm-4">
					<img src="img/c.png" class="land_temp img-responsive center">
				</div>
				<img src="img/a1.png" class="img-responsive land-img">
			</div> -->
		</div>
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
			    		<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') 	}}">
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
			    		<form class="form-horizontal" role="form" method="POST" action="{{ url('/		register') }}">
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
	<div id="download">
			{{--<span>Downloaded 0</span>--}} <strong>Resumes Created- <span class="count">500</span></strong>

<style type="text/css">
.count{
  color:inherit;
  font-size:inherit;
}

</style>
	</div>
	<div class="container-fluid" id="why_rb">
		<div class="col-sm-3" style="font-family: 'Lato', sans-serif; ">
			<p style="font-size: 40px;"><strong>Why ??</strong> </p>
			<p>Resume Builder</p>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<p>Resume Builder makes it fast and easy to create the powerful, professional resume hiring managers are looking for.<br>
			Our Resume Builder lets you create a resume in minutes!<p>
		</div>	
		<div class="col-sm-2"></div>				
	</div>
	<div class="container" id="how_itworks">
		<h1 style="text-align: center; padding-bottom: 70px;">How It <span style="color: #15b8db">Works</span></h1>
		<div class="row ">
			<div class="col-sm-3">
				<span class="number">1</span>
				<img src="img/macpro.png" class="img-responsive how">
				 <p>Build a resume with the help of few simple steps.</p>
			</div>
			<div class="col-sm-3">
			<span class="number">2</span>
				<img src="img/templates.png" class="img-responsive how">
				<p>Choose a template, of your choice.Make your resume of your choice.</p>				
			</div>
			<div class="col-sm-3">
				<span class="number">3</span>
				<img src="img/download.jpg" class="img-responsive how">
				<p>Download Your resume in pdf or word document format.</p>
			</div>
			<div class="col-sm-3">
				<span class="number">4</span>
				<img src="img/login.png" class="img-responsive how">
				<p>Save your resume for future reference. You can edit/ view your resume in future. By creating an account in Resume Builder.</p>				
			</div>
		</div>
	</div>
	<div class="container-fluid " id="features">
		<div class="container">
			<div class="row">
				<h1 style="text-align: center; margin-bottom: 2%;">Features</h1>
				<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-sign-in social_icons"></i></span><br><br>Easy to create with social login</div>
				<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-file-text social_icons"></i></span><br><br>Provides different design templates</div>
				<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-cloud-download social_icons"></i></span><br><br>You can Save and download your resume for future.</div>
				<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-pencil-square social_icons"></i></span><br><br>You can Edit your resume. Change the templates</div>
			</div>			
		</div>
	</div>
	<div class="container" id="contact">
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
	</div>

<script type="text/javascript">
	$('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 10000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});
</script>
</body>
</html>
