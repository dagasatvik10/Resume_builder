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

	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="content-land">
		<div style="font-size:40px; padding-top: 100px;">Create a standout resume in minutes.</div>
		<div style="font-size:30px; padding-top: 20px; padding-bottom: 20px;">Easily create professional resumes.</div>
		<a class="btn btn-info" href={{ url('/dashboard') }} id="create_button">Create Resume Now</a><br>
		<img src="img/a.png" class="land_temp">
		<img src="img/b.png" class="land_temp">
		<img src="img/c.png" class="land_temp">
	</div>
	<div id="download" style="font-family:Raslani American letters; font-size: 35px;">
		<span>Downloaded 0</span> <span>Saved 0</span>
	</div>
	<!--fixed navigation-->
	<div class="navbar_scroll">
	<nav class="navbar navbar-fixed-top" style="font-size: 20px;" data-spy="affix" data-offset-top="650">
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
	<div class="container-fluid" id="why_rb">
		<h2 style="text-align: center;">Why Resume Builder</h2>
			Resume Builder makes it fast and easy to create the powerful, professional resume hiring managers are looking for.<br>
			Our Resume Builder lets you create a resume in minutes!
	</div>
	<div class="container" id="how_itworks">
		<h1 style="text-align: center;">How It <span style="color: #15b8db">Works</span></h1>
		<div class="row ">
			<div class="col-sm-6">
				<img src="img/macpro.png" class="img-responsive">
			</div>
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				 Build a resume with the help of few simple steps.
			</div>
		</div><hr>
		<div class="pointer pointer-right">
			<img src="img/arrow_down_left.png" class="img-responsive">
		</div>
		<div class="row step">
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				Choose a template, of your choice.Make your resume of your choice.
			</div>
			<div class="col-sm-6">
				<img src="img/templates.png" class="img-responsive">
			</div>
		</div><hr>
		<div class="pointer pointer-left">
			<img src="img/arrow_down_right.png" class="img-responsive">
		</div>
		<div class="row step">
			<div class="col-sm-6">
				<img src="img/download.jpg" class="img-responsive">
			</div>
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				Download Your resume in pdf or word document format.
			</div>
		</div><hr>
		<div class="pointer pointer-right">
			<img src="img/arrow_down_left.png" class="img-responsive">
		</div>
		<div class="row step">
			<div style="font-size: 25px; width: 50%;" class="col-sm-6">
				Save your resume for future reference. You can edit/ view your resume in future. By creating an account in Resume Builder.
			</div>
			<div class="col-sm-6">
				<img src="img/login.png" class="img-responsive">
			</div>
		</div><hr>
	</div>
	<div class="container" id="sample_design">
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#sample-featured" data-toggle="tab">Featured</a></li>
		    <li><a href="#" data-toggle="tab">Professional</a></li>
		    <li><a href="#" data-toggle="tab">Engineer</a></li>
	  	</ul>
	</div>
	<!--Tab panes-->
	<div class="tab-content cv-templates">
		<div class="tab-pane" id="sample-featured">
			<div class="template">
				<img src="img/avant.jpg" class="img-responsive">
				<figcaption>Design Director</figcaption>
			</div>
			<div class="template">
				<img src="img/gallant.jpg" class="img-responsive">
				<figcaption>President</figcaption>
			</div>
			<div class="template">
				<img src="img/slate.jpg" class="img-responsive">
				<figcaption>Sales & Marketing</figcaption>
			</div>
		</div>
	</div>

	<div class="container-fluid row " id="features">
		<div class="col-sm-7">
			<h1 style="text-align: center; margin-bottom: 80px;">Features</h1>
			<ul style="list-style:none;">
				<li><span class="glyphicon glyphicon-share-alt"></span>Easy to create with social login</li>
				<li><span class="glyphicon glyphicon-share-alt"></span>Provides different design templates</li>
				<li> <span class="glyphicon glyphicon-share-alt"></span>You can Save and download your resume for future.</li>
				<li><span class="glyphicon glyphicon-share-alt"></span>You can Edit your resume. Change the templates</li>
			</ul>
		</div>

		<div class="col-sm-5">
			<img src="img/features.png" class="img-responsive">
		</div>
		
	</div>
	<div class="container" id="contact">

		<h1 style="text-align: center; color: #fff; margin-bottom: 30px; ">CONTACT</h1>
		Thanks for your interest in Resume Builder. If you have a question regarding your Resume Builder, please visit our support forums.<br><br>
		<p style="font-size: 23px;">We'd <span class="glyphicon glyphicon-heart-empty"></span> to help.</p>
		<ul style="list-style: none;">
			<a href=" http://silive.in/"><li>http://silive.in/</li></a>
			<a href="https://www.facebook.com/RedefiningLimitations/"><li>https://www.facebook.com/RedefiningLimitations/</li></a>

		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy;Software Incubator.</div>
	</div>
	
</body>
</html>