@extends('layouts.master')

@section('header')
	<nav>
		<div class="nav-wrapper teal lighten-2">
			<a href="#" class="" style="margin-left: 80px;">Create, Maintain and publish your CV's for free</a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li><a href="">Login_id</a></li>
		      <li><a href="">Logout</a></li>
			</ul>
		</div>
	</nav>
		<div class="row card-panel" style="margin-top: 0px; height: 100px;">
			<div class="col s8 brand-logo">
				<i class="medium material-icons">library_books</i>Resume Builder
			</div>
			<div class="col s2">
				
			</div>
			<div class="col s2">
				
			</div>
		</div>
@stop

@section('section')
	<div class="container col s12">
		<div class="flow-text">
			My CV <!--name of cv given by user-->
		</div>
		<nav class="card-panel #ffffff white lighten-5" style="box-shadow: none;">
			<ul class="right">
				<li class="waves-effect waves-light btn">Save</li>
				<li class="waves-effect waves-light btn" style="margin-left: 20px;">Download</li>
			</ul>
		</nav>
		<div class="row">
			<div class="col s4">
				<ul class="">
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="basicinfo">Basic Information</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="work_exp">Work Experience</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="educ">Education</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="object">Objective</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="per_det">Personal Details</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="proj">Projects</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="skills">Skills</li>
				</ul>
				<div class="waves-effect waves-light btn" style="border-radius: 20px;"><i class="medium material-icons">playlist_add</i>
					Add New Section
				</div>
			</div>
			<div class="col s8">
				<div id="basic_info" style="display: none;">
		            @include('form._basic_info')
		        </div>
		        <div id="education" style="display: none;">
		            @include('form._education')
		        </div>
		        <div id="objective" style="display: none;">
		            @include('form._objective')
		        </div>
		        <div id="personal_details" style="display: none;">
		            @include('form._personal_details')
		        </div>
		        <div id="project" style="display: none;">
		            @include('form._project')
		        </div>
		        <div id="skill" style="display: none;">
		            @include('form._skill')
		        </div>
		        <div id="work_experience" style="display: none;">
		            @include('form._work_experience')
		        </div>
		</div>
	</div>
@stop

@section('footer')
	<footer>
		<div class="row card-panel #212121 grey darken-4 #fafafa grey-text text-lighten-5">
			<div class="col s8">
				Resume Builder &copy; Software Incubator 2016.
				All rights Reserved 
			</div>
			 <div class="col s2">Terms and Policy</div>
			 <div class="col s2">
			 	Contact 
			 </div> 
		</div>
	</footer>
@stop