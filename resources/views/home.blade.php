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
	<div class="navbar_scroll">
		<div id="content-land">
			<div>
				<div style="font-size:24px; padding-top: 100px; letter-spacing: 1.5px;">
				Create a standout resume in minutes.
				</div>
				<div style="font-size:20px; letter-spacing: 1.5px;">
					Easily create professional resumes.
				</div>
				<a class="btn btn-info" href={{ url('/dashboard') }} id="create_button">Create Resume Now</a>
			</div>
			<div>
				<img src="img/a.png" class="land_temp img-responsive">
				<img src="img/b.png" class="land_temp img-responsive">
				<img src="img/c.png" class="land_temp img-responsive center">
			</div>
		</div>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #3f51b5;" data-spy="affix" data-offset-top="650" id="navbar_top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	        	</button>
				<a class="navbar-brand" href={{ url('/') }}>Resume Builder</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#contact"> Contact Us</a></li>
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
	</div>
	<div id="download">
			{{--<span>Downloaded 0</span>--}} <span>Resumes Created- {{ $resumes->count() }}</span>
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
				<span class="number">&#x41;</span>
				<img src="img/macpro.png" class="img-responsive">
				 <p>Build a resume with the help of few simple steps.</p>
			</div>
			<div class="col-sm-3">
			<span class="number">2</span>
				<img src="img/templates.png" class="img-responsive">
				<p>Choose a template, of your choice.Make your resume of your choice.</p>				
			</div>
			<div class="col-sm-3">
				<span class="number">3</span>
				<img src="img/download.jpg" class="img-responsive">
				<p>Download Your resume in pdf or word document format.</p>
			</div>
			<div class="col-sm-3">
				<span class="number">4</span>
				<img src="img/login.png" class="img-responsive">
				<p>Save your resume for future reference. You can edit/ view your resume in future. By creating an account in Resume Builder.</p>				
			</div>
		</div>
	</div>
	<!--<div class="container" id="sample_design">
		<h2 style="text-align: center; padding-bottom: 70px;">Sample <span style="color: #15b8db">Designs</span></h2>
		<ul class="nav nav-pills">
		    <li class="active"><a href="#sample-featured" data-toggle="tab">Featured</a></li>
		    <li><a href="#sample-professional" data-toggle="tab">Professional</a></li>
		    <li><a href="#sample-engineer" data-toggle="tab">Engineer</a></li>
	  	</ul>
	  	
	</div>

	<div class="tab-content cv-templates">
		<div class="tab-pane fade in active" id="sample-featured">
			<div class="template">
				<img src="img/avant.jpg" class="img-responsive sample_img">
				<figcaption>Design Director</figcaption>
			</div>
			<div class="template">
				<img src="img/gallant.jpg" class="img-responsive sample_img">
				<figcaption>President</figcaption>
			</div>
			<div class="template">
				<img src="img/slate.jpg" class="img-responsive sample_img">
				<figcaption>Sales & Marketing</figcaption>
			</div>
		</div>
		<div class="tab-pane fade" id="sample-professional">
			<div class="template">
				<img src="img/majed-project-manager.jpg" class="img-responsive sample_img">
				<figcaption>Project Manager</figcaption>
			</div>
			<div class="template">
				<img src="img/carolyn-principal.jpg" class="img-responsive sample_img">
				<figcaption>Principal</figcaption>
			</div>
			<div class="template">
				<img src="img/bobbie-doctor.jpg" class="img-responsive sample_img">
				<figcaption>Doctor</figcaption>
			</div>
		</div>
		<div class="tab-pane fade" id="sample-engineer">
			<div class="template">
				<img src="img/scott-software-engineer.jpg" class="img-responsive sample_img">
				<figcaption>Software Engineeer</figcaption>
			</div>
			<div class="template">
				<img src="img/khaled-site-engineer.jpg" class="img-responsive sample_img">
				<figcaption>Site Engineer</figcaption>
			</div>
			<div class="template">
				<img src="img/vincent-application-engineer.jpg" class="img-responsive sample_img">
				<figcaption>Application Engineer</figcaption>
			</div>
		</div>
	</div>-->
	<div class="container-fluid " id="features">
		<div class="row">
			<h1 style="text-align: center; margin-bottom: 50px;">Features</h1>
			<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-sign-in social_icons"></i></span><br><br>Easy to create with social login</div>
			<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-file-text social_icons"></i></span><br><br>Provides different design templates</div>
			<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-cloud-download social_icons"></i></span><br><br>You can Save and download your resume for future.</div>
			<div class="col-sm-3" style="text-align: center;"><span class="feature"><i class="fa fa-pencil-square social_icons"></i></span><br><br>You can Edit your resume. Change the templates</div>
		</div>
	</div>
<div class="container" id="contact">
	<!-- <div class="row">
		<div class="col-sm-4">
			<p>Copyright &copy; 2016.All right reserved.</p>
		</div>
		<div class="col-sm-4 center-block">
			<p class="center-block">Powered By Software Incubator.</p>
		</div>
		<div class="col-sm-4 pull-right" >
			<button>Visit us</button>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-4">
			<p>Copyright &copy; 2016.All right reserved.</p>
		</div>
		<div class="col-md-4 center-block">
			<p style="text-align:center;">Powered By - Software Incubator.</p>
		</div>
		<div class="col-md-4">
			<button class="pull-right">Visit Us</button>
		</div>
	</div>
</div>
<nav class="navbar navbar-default" style="font-size: 15px;  z-index: 9999;" data-spy="affix" data-offset-top="650" id="navbar_bottom">
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
					<li><a href="#">Customer Reviews</a></li>
					<li><a href="#sample_design"> Sample Designs</a></li>
					<li><a href="#contact"> Contact Us</a></li>
					@if (Auth::guest())
                        <li><a href={{ url('/login') }}>Login</a></li>
                    @else
                        <li class="dropdown">
                           <a href={{ route('user.dashboard') }} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
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
</body>
</html>
