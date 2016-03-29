@extends('layouts.master')

@section('section')
		<div class="container">
			<div class="flow-text">Your CV's</div><br>
			<a class="waves-effect waves-light btn-large modal-trigger" href="#modal1" style="border-radius: 25px;">Create a new CV</a>
			<div class="divider"></div>
			@if($resumes->count())
				<table class="highlight" style="margin-top:40px; border: 1px solid grey; border-collapse: collapse; ">
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
								<a class="btn-floating btn-large waves-green waves-light"
								href={{ route('resume.create',['id' => $resume->id]) }} >
									<i class="small material-icons">mode_edit</i>
								</a>
								<a class="btn-floating btn-large waves-green waves-light red"
								   href={{ route('resume.delete',['id' => $resume->id]) }}>
									<i class="small material-icons">delete</i>
								</a>
								<a class="btn-floating btn-large waves-green waves-light blue"
								   href={{ route('resume.show',['id' => $resume->id]) }}>
									Show
								</a>
							</td>
						</tr>
					@endforeach
				</table>
			@else
				<div class="row">
					<h5>No CV stored at present</h5>
				</div>
			@endif
		</div>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<div>
					{!! Form::open(['route' => 'resume.name']) !!}
					<div class="input-field">
						{!! Form::text('name','',['class' => 'validate']) !!}
						{!! Form::label('name','Resume Name') !!}
					</div>
					<div class="input-field">
						{!! Form::submit('Create',['class' => 'btn']) !!}
					</div>
					{!! Form::close() !!}
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
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

@section('script')
	<script>
		$(document).ready(function(){
			//the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			$('.modal-trigger').leanModal();
		});
	</script>
@stop