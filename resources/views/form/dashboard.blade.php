@extends('layouts.master')


@section('header')
	<!--<span class="card-panel teal lighten-2">Dashboard</span>
	<div class="row card-panel teal lighten-2">
		<div class="col s9 #e3f2fd blue-text text-lighten-5 flow-text">DashBoard</div>
		<div class="col s1 #e3f2fd blue-text text-lighten-5 flow-text">Login_id</div>
		<div class="col s2 #e3f2fd blue-text text-lighten-5 flow-text">Logout</div>
		<!<ul id="dropdown2" class="dropdown-content">
	    	<li><a href="#!">Log Out<span class="badge">Log Out</span></a></li>	    
	  	</ul>
	  	<a class="btn dropdown-button" href="#!" data-activates="dropdown2"><i class="mdi-navigation-arrow-drop-down right"></i></a>
		</div>-->
		<nav>
		  <div class="nav-wrapper teal lighten-2">
		    <a href="" class="brand-logo">Dash Board</a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li><a href="">Login_id</a></li>
		      <li><a href="">Logout</a></li>
		     </ul>
		  </div>
		</nav>
@stop

@section('section')
		<a class="waves-effect waves-light btn-large" style="margin-top:500px; margin-left: 400px; ">CREATE RESUME</a>
@stop

@section('footer')

@stop