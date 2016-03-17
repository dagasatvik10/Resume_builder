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
		<div class="container">
			<div class="flow-text">Your CV's</div><br>
			<a class="waves-effect waves-light btn-large" style="border-radius: 25px;">Create a new CV</a>
		<table class="highlight" style="margin-top:40px; border: 1px solid grey; border-collapse: collapse; ">
				<tr>
					<th>Name</th>
					<th>Created At</th>
					<th>Options</th>
				</tr>
				<tr>
					<td>Sample CV</td>
					<td>28 February</td>
					<td>
						<button class="waves-effect waves-light btn-large">Delete</button>
						<button class="waves-effect waves-light btn-large"><i class="small material-icons">mode_edit</i></button>
					</td>
				</tr>
			</table>
		</div>
		
@stop

@section('footer')
	<footer class="page-footer">
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