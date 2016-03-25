@extends('layouts.master')

@section('header')
	<nav class="navbar navbar-fixed-top" style="font-size: 20px; background: repeating-linear-gradient(
	  45deg,
	  #000040,
	  #191953 2px,
	  #000040 2px,
	  #465298 2px
	);">
		  <div class="container-fluid">
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
			          <li style="color: #fff; padding-top: 10px;">{{ $user->email }}</li>
			      	  <li><a href={{ url('/logout') }}>Logout</a></li>
			        </ul>
			  </div>
		  </div>
		</nav>
@stop

@section('section')
		<div class="container" style="margin-top: 100px; font-size: 25px;">
			<div class="flow-text">Your Resume's</div><br>
			<button class="btn-info" style="border-radius: 25px;"><a class="modal-trigger" href="#modal1" >Create a new Resume</a></button>
			<table class="table table-hover" style="margin-top:40px; border: 1px solid grey; ">
				<tr>
					<th>Name</th>
					<th>Created At</th>
					<th>Options</th>
				</tr>
				@foreach($resumes as $resume)
				<tr>
					<td>{{ $resume->name }}</td>
					<td>{{ $resume->created_at }}</td>
					<td>
						<button class="btn-info">Delete</button>
						<button class="btn-info">Edit</button>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Name of Resume</h4>
				<div>
					{!! Form::open(['route' => 'resume.name']) !!}
					{!! Form::text('name') !!}
					{!! Form::submit('submit') !!}
					{!! Form::close() !!}
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>
		
@stop

@section('footer')
	<footer class="container-fluid panel-footer">
	<ul style="list-style: none; text-align: center;">
			<li style="display: inline;"><a href="www.facebook.com/softwareincubator"><img src="img/fb.png" class="f_img"></a></li>
			<li style="display: inline;"><img src="img/twitter.png"class="f_img"></li>
			<li style="display: inline;"><img src="img/google.png" class="f_img"></li>
		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
	</footer>
@stop