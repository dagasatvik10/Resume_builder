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
						<a class="btn-info" id="resume_download" href={{ route('resume.download',['id' => $resume->id]) }}>Download</a>
					</li>
					<li style="display: inline;">

						{{--<button class="btn-info" style="margin-left: 20px;" data-toggle="modal" data-target="#myTemplateModal">Download</button>--}}
					</li>
				</ul>
			</div>
		</div>
		{{--<div id="myTemplateModal" class="modal fade" role="dialog">--}}
		  {{--<div class="modal-dialog">--}}

		    {{--<!-- Modal content-->--}}
		    {{--<div class="modal-content" style="padding: 50px;">--}}

					{{--<img src="/img/template1.jpeg">--}}
					{{--<img src="/img/template2.png">--}}

			      {{--<div class="modal-footer">--}}
			        {{--<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>--}}
			      {{--</div>--}}
			    {{--</div>--}}
		    {{--</div>--}}

		  {{--</div>--}}

		<div class="row">
			<div class="col-sm-4">
				<ul class="">
					<?php
						$i = 0;
						$check = array();
					?>
					@foreach($resume->sections as $section)

						
						<li class=" btn form_navigation" style="margin-bottom: 10px;  background-color: #3f51b5; width: 300px; color: #fff; "

							onclick="show({{ $section->id }})"
							id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>

						
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
						{{--@endif--}}
				 	@endforeach
				<li class=" btn" style="color: #fff; background-color: #3f51b5;">
					Add New Section<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
				</li>
			</ul>
			</div>
			<div class="col-sm-8">
				{!! Form::open(['id' => 'resume','name' => 'resume']) !!}
					<?php
					$i = 0;
					$check = array();
					?>
					@foreach($resume->sections as $section)

						@if(!in_array($section->id,$check))
						<div id={{ 'form_'.$section->id}}>
							<?php $l = 1; ?>
							@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)

								<div class="mapping_section">
                                    <?php
                                    $j = 0;
                                    $c = array();
                                    ?>
									@foreach($mapping_section->subsections as $subsection)
										@if(!in_array($subsection->id,$c))
											<div class="row">
												<div class="input-field col-sm-12">
													{{ Form::label($subsection->pivot->id,$subsection->subsection_name) }}
												</div>
												<?php $k = 1; ?>
												@foreach($subsection->mapping_subsections()->where('mapping_section_id',$mapping_section->id)->get()
                                                as $mapping_subsection)
													<?php
													$content = $mapping_subsection->detail==null?null:$mapping_subsection->detail->content;
													?>
													<div class="input-field col-sm-12">
														{!! Form::text($mapping_subsection->id,$content,['class' => 'validate']) !!}
													</div>
													@if($subsection->flag != 0 and $k > 1)
														<br>
														<div class="row">
															<a class="btn btn-danger btn-flat"
															   href={{ route('resume.deleteSubsection',['mapping_subsection_id' => $mapping_subsection->id,'resume_id' => $resume->id]) }}>
																Delete {{ $subsection->subsection_name }}
															</a>
														</div>
													@endif
													<?php $k++; ?>
												@endforeach
												@if($subsection->flag != 0)
													<br><br>
													<div class="row">
														<a class="btn btn-primary btn-flat"
														   href={{ route('resume.addSubsection',['mapping_section_id' => $mapping_section->id,'subsection_id' => $subsection->id]) }}>
															Add new {{ $subsection->subsection_name }}
														</a>
													</div>
												@endif
											</div>
											<?php
											$c[$j] = $subsection->id;
											$j++;
											?>
										@endif
									@endforeach
								</div>
								@if($section->flag != 0 and $l > 1)
									<br>
									<div class="row">
										<a class="btn btn-flat btn-danger"
										   href={{ route('resume.deleteSection',['mapping_section_id' => $mapping_section->id,'resume_id' => $resume->id]) }}>
											Delete {{ $section->section_name }}
										</a>
									</div>
								@endif
								<?php $l++; ?>
							@endforeach

							@if($section->flag != 0)
								<br>
								<div class="row">
									<a class="btn btn-flat btn-primary"
									   href={{ route('resume.addSection',['section_id' => $section->id,'resume_id' => $resume->id]) }}>
										Add new {{ $section->section_name }}
									</a>
								</div>
							@endif

						</div>

						<?php
						$check[$i] = $section->id;
						$i++;
						?>
						@endif
					@endforeach

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop

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

