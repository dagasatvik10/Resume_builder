@extends('layouts.master')

@section('header')
	<nav>
		<div class="nav-wrapper teal lighten-2">
			<a href="#" class="" style="margin-left: 80px;">Create, Maintain and publish your CV's for free</a>
		    <ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li>{{ $user->email }}</li>
		      <li><a href={{ url('/logout') }}>Logout</a></li>
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
			{{ $resume->name }}
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
					<?php $check = -1; ?>
					@foreach($resume->sections as $section)
						@if($section->id != $check)
							<li class="waves-effect waves-light btn form_navigation" style="margin-bottom: 10px; width: 300px;"
								onclick="show({{ $section->id }})"
								id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>
							<?php $check = $section->id; ?>
						@endif
				 	@endforeach
				</ul>
				<div class="waves-effect waves-light btn" style="border-radius: 20px;"><i class="medium material-icons">playlist_add</i>
					Add New Section
				</div>
			</div>
			<div class="col s8">
				{!! Form::open() !!}
					@foreach($resume->sections as $section)
						<div id={{ 'form_'.$section->id}}>
							@foreach($section->mapping_sections()->where('resume_id','=',$resume->id)->get() as $mapping_section)
								<div class="section">
									@foreach($mapping_section->subsections as $subsection)
										<div class="row">
											<?php $default = \App\Detail::where('mapping_subsection_id',
													'=',$subsection->pivot->id)->first();
												  $content = $default===null?null:$default->content;
											?>
											<div class="input-field col s12">
												{!! Form::text($subsection->pivot->id,$content,['class' => 'validate']) !!}
												{!! Form::label($subsection->pivot->id,$subsection->subsection_name) !!}
											</div>
										</div>
									@endforeach
								</div>
								<div class="divider"></div>
							@endforeach
						</div>
					@endforeach
					{!! Form::submit('Save') !!}
				{!! Form::close() !!}
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
