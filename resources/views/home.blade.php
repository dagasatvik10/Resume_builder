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

	<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
</head>
<body >
	<div class="navbar_scroll" style="background-image: url({{ asset('img/land-bg.jpg') }}); background-size:cover;">
		<div class="container">
			<div class="row pull-right top-fix">
				@if (Auth::guest())
					<div id="register" class="inline">
						<button data-toggle="modal" data-target="#registerform">
							<span class="fa fa-pencil register-icon"></span><span class="register-text">Register</span>
						</button>
					</div>
					<div id="login" class="inline">
						<button data-toggle="modal" data-target="#loginform">
							<span class="fa fa-user login-icon"></span><span class="login-text">Login</span>
						</button>
					</div>
				@else
					<div>
						<span>
							<a href="{{ route('user.dashboard') }}">{{ Auth::user()->name }}</a>
						</span>
						<span>
							<a href={{ url('/logout') }}>Logout</a>
						</span>
					</div>
				@endif
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
					@if (Auth::guest())
						<button class="btn white" data-toggle="modal" data-target="#loginform" id="create_button">Create Resume Now</button>
					@else
						<a class="btn white" href={{ url('/dashboard') }} id="create_button">Create Resume Now</a>
					@endif
				</div>
			</div>
		</div>

		<div id="loginform" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body row">
						<div class="col-md-7 form">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
								{!! csrf_field() !!}
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">E-mail</label>
									<div class="col-md-8">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-8">
										<input type="password" class="form-control" name="password" required>

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
									<div class="col-md-3"></div>
									<div class="col-md-4 ">
										<button type="submit" class="btn register" >
											Login
										</button>
									</div>
									<div class="col-md-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-md-offset-4">
										<a class="btn btn-link disabled" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
									</div>
								</div>
							</form>
						</div>
					<div class="col-md-5" style="text-align:center; padding-top:8vh;">
						<div><a class="btn loginfb"  href='{{ url('auth/fb') }}'>
							<span class="fa fa-facebook-square fb"></span>&nbsp; &nbsp; Facebook
						</a></div>	<p class="or">OR</p>
						<div><a class="btn logingoogle"  href='{{ url('auth/google') }}'>
							<span class="fa fa-google-plus-square google"></span>&nbsp; &nbsp; Google +
						</a></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
		<div id="registerform" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Register</h4>
					</div>
					<div class="modal-body row">
						<div class="col-md-7 form">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
								{!! csrf_field() !!}

								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">Name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">E-Mail Address</label>
									<div class="col-md-8">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-8">
										<input type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">Confirm Password</label>
									<div class="col-md-8">
										<input type="password" class="form-control" name="password_confirmation" required>
										@if ($errors->has('password_confirmation'))
											<span class="help-block">
												<strong>{{ $errors->first('password_confirmation') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-4 ">
										<button type="submit" class="btn register" >
											Register
										</button>
									</div>
									<div class="col-md-4"></div>
								</div>
							</form>
						</div>
						<div class="col-md-5">
							<div class="col-md-5" style="text-align:center; padding-top:8vh;">
								<div><a class="btn loginfb"  href='{{ url('auth/fb') }}'>
									<span class="fa fa-facebook-square fb"></span>&nbsp; &nbsp; Facebook</a>
								</div>
								<p class="or">OR</p>
								<div><a class="btn logingoogle"  href='{{ url('auth/google') }}'>
									<span class="fa fa-google-plus-square google"></span>&nbsp; &nbsp; Google +
								</a></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="download">
		<strong>Resumes Created- <span class="count">{{ $resumes->count() }}</span></strong>
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
			<div class="container">
				<div class="row">
					<h1 style="text-align: center; padding-bottom: 30px; padding-top:30px;">HOW IT <span style="color: #15b8db">WORKS</span></h1>
				</div>
				<div class="row">
					<div class="col-lg-4" style="text-align:center;">
						<h3 style="font-weight: bold"><span style="">0</span>1</h3>
						<h1 style="margin-top: -15px;">Template</h1>
						<img src="img/template.png" width="150px" height="150px" style="margin:0 auto; display:block; padding-bottom:20px;" class="img-responsive">
						<p style="text-align:center; padding-top:20px;">Choose a template, of your choice.Make your resume of your choice.</p>
					</div>
					<div class="col-lg-4 " style="text-align:center;">
						<h3 style="font-weight: bold;"><span style="">0</span>2</h3>
						<h1 style="margin-top: -15px;">Download</h1>
						<img src="img/download.ico" width="150px" height="150px" style="margin:0 auto; display:block; padding-bottom:20px;" class="img-responsive">
						<p style="text-align:center; padding-top:20px;">Download Your resume in pdf or word document format.</p>
					</div>
					<div class="col-lg-4" style="text-align:center;">
						<h3 style="font-weight: bold"><span style="">0</span>3</h3>
						<h1 style="margin-top: -15px;">Save Resume</h1>
						<img src="img/save.png" width="150px" height="150px" style="margin:0 auto; display:block; padding-bottom:20px;" class="img-responsive">
						<p style="text-align:center; padding-top:20px;">Save your resume for future reference. You can edit/ view your resume.</p>
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
						<a  style="text-decoration: none;" href={{ url('http://silive.in/') }}><span class="pull-right"><img src="{{ asset('img/si_logo.png') }}" >Visit Us</span></a>
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
