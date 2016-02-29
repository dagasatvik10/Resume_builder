@extends('layouts.master')

@section('header')
	<script>
	    $(document).ready(function(){
	        $("#basic_info").click(function(){
	            $("p").hide();
	            alert('hello');
	    });
	        
    </script> 
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
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="basic_info">Basic Information</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="work_experience">Work Experience</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="qualification">Qualification</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="education">Education</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="objective">Objective</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="personal_details">Personal Details</li>
					<li class="waves-effect waves-light btn" style="margin-bottom: 10px; width: 300px;" id="projects">Projects</li>
				</ul>
				<div class="waves-effect waves-light btn" style="border-radius: 20px;"><i class="medium material-icons">playlist_add</i>
					Add New Section
				</div>
			</div>
		<div class="col s8">
			<?php
				//include 'dashboard.blade.php';
				//include(app_path().'\includes\dashboard.blade.php');
			?>
			<p id="b">basic_info</p>
			<p id="w" style="display: none;">Work_experience</p>
			<p id="p" style="display: none;">Project</p>
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