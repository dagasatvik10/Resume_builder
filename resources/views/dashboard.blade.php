@extends('layouts.master')

@section('section')
		<div class="container" style="margin-top: 100px;">
			<div class="lead" style="">Your Resume's</div><br>
			<!--<a class="btn btn-info" href="#modal1" style="border-radius: 25px;">Create a new CV</a>-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create new resume</button>
			<div class="divider"></div>
			@if($resumes->count())
				<table class="table table-hover" style="margin-top:40px; border: 1px solid grey; border-collapse: collapse; ">
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
									<span class="glyphicon glyphicon-edit"></span>
								</a>
								<a class="btn-floating btn-large waves-green waves-light red"
								   href={{ route('resume.delete',['id' => $resume->id]) }}>
									<span class="glyphicon glyphicon-remove-circle"></span>
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
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
					{!! Form::open(['route' => 'resume.name']) !!}
					<div class="input-field">
						{!! Form::label('name','Resume Name') !!}
						{!! Form::text('name','',['class' => 'validate']) !!}
					</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			      </div>
			    </div>
		    </div>

		  </div>
		</div>		
@stop

@section('footer')
	<footer class="container-fluid panel-footer " style="position: fixed;
	bottom: 0px;">
	<ul style="list-style: none; text-align: center;">
			<li style="display: inline;"><a href="http://www.facebook.com/RedefiningLimitations"><img src="img/fb.png" class="f_img"></a></li>
			<li style="display: inline;"><img src="/img/twitter.png"class="f_img"></li>
			<li style="display: inline;"><img src="/img/google.png" class="f_img"></li>
		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
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