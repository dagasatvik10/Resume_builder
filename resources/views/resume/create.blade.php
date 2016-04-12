@extends('layouts.master')

@section('section')
	<div class="container" style="margin-top: 150px;">
		<div class="row" style="margin-bottom: 60px;">
			<div class="col-sm-4" style="font-size: 25px; font-weight: bold; margin-left: 50px;">
				{{ $resume->name }}
			</div>
			<div class="col-sm-4">
				<ul style="list-style: none; ">
					<li style="display: inline;">
						<button class=" btn-info" id="resume_submit" >Save</button>
					</li>
					<li style="display: inline;">

						<button class="btn-info" style="margin-left: 20px;" data-toggle="modal" data-target="#myTemplateModal">Download</button>
					</li>
				</ul>
			</div>			
		</div>
		<div id="myTemplateModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
					<img src="img/template1.jpeg">
					<img src="img/template2.png">
			      <div class="modal-footer">
			        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			      </div>
			    </div>
		    </div>

		  </div>
		<div class="row">
			<div class="col-sm-4">
				<ul class="">
					<?php
						$i = 0;
						$check = array();
					?>
					@foreach($resume->sections as $section)
						
						<li class=" btn form_navigation" style="margin-bottom: 10px; width: 300px; color: #fff; background: repeating-linear-gradient( 45deg,
										      #000040,
										      #191953 2px,
										      #000040 2px,
										      #465298 2px);"
							onclick="show({{ $section->id }})"
							id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>

						
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
				 	@endforeach
				<li class=" btn" style="color: #fff; background: repeating-linear-gradient( 45deg,
										      #000040,
										      #191953 2px,
										      #000040 2px,
										      #465298 2px);">
					Add New Section<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
				</li>
			</ul>
			</div>
			<div class="col-sm-8">
				{!! Form::open(['id' => 'resume','name' => 'resume']) !!}
					@foreach($resume->sections as $section)
					@if($section->flag == 0)
					{{dd($section->flag)}}
					@endif


					<div id={{ 'form_'.$section->id}}>
							@foreach($section->mapping_sections()->where('resume_id','=',$resume->id)->get() as $mapping_section)
								<div class="mapping_section">
									@foreach($mapping_section->subsections as $subsection)
										<div class="row">
											<?php $default = \App\Detail::where('mapping_subsection_id',
													'=',$subsection->pivot->id)->first();
												  $content = $default===null?null:$default->content;
											?><br>
											<div class="input-field col-sm-3">
												{!! Form::label($subsection->pivot->id,$subsection->subsection_name) !!}
												</div>
												<div class="col-sm-9"> 
												{!! Form::text($subsection->pivot->id,$content,['class' => 'validate']) !!}
												
											</div>
										</div>
									@endforeach
								</div>
							@endforeach
						</div>
				@endforeach



				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop

{{--@section('footer')
	<footer class="container-fluid panel-footer " style=" position: absolute;
    bottom: 0px; width: 100%; font-size: 17px; text-align:center; background-color: #151515;
    color: #888888;">
		<ul style="list-style: none; text-align: center;">
			<li style="display: inline;"><a href="www.facebook.com/softwareincubator"><img src="/img/fb.png" class="f_img"></a></li>
			<li style="display: inline;"><img src="/img/twitter.png"class="f_img"></li>
			<li style="display: inline;"><img src="/img/google.png" class="f_img"></li>
		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
	</footer>
@sto--}}

@section('script')
	<script>
		$(document).ready(function(){
			show(1);
			$('#resume_submit').click(function(){
				$('#resume').submit();
			});
		});

		function show(obj)
		{
			//console.log(obj);
			@foreach($resume->sections as $section)
                $("#form_{{ $section->id }}").hide();
			@endforeach
            $("#form_"+obj).show();
		}
	</script>
@stop

