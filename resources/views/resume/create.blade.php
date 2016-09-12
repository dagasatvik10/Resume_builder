@extends('layouts.master')

@section('section')
	<div class="container-fluid resumeform" id="resume_full_div">
		<div class="row">
			<div class="col-lg-3 col-xs-2 section_form">
				<ul class="">
					<?php
					$i = 0;
					$check = [];
					?>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
							<li class="btn form_navigation" onclick="show({{ $section->id }})"
								id="{{ 'form_navigation_'.$section->id }}"><span class="fa fa-sticky-note"></span>&nbsp; &nbsp;{{ $section->section_name }}
								@if($section->flag == 2)
									<button class="delete_new_section_subsection" data-link="{{ route('resume.deleteNewSection',['id' => $resume->id ]) }}"
									 data-token='{{ csrf_token() }}' data-id="{{ $section->id }}"><span class="fa fa-trash"></span></button>
								@endif
							</li>
						<?php
							$check[$i] = $section->id;
							$i++;
							?>
						@endif
					@endforeach
					<li class="form_navigation">
						<button class="btn" id="add_new_section_btn">
							<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
						</button>
						<div class="form-group" id="add_new_section_form">
							<input type="text" class="form-control" id="add_new_section_input" placeholder="Section Name">
							<input class="btn form-control" type="button" id="add_new_section_submit" value="Add" data-token='{{ csrf_token() }}'>
						</div>
					</li>

				</ul>
			</div>
			<div class="col-lg-7 col-xs-10 side_right">
				<div class="row" style="border-bottom: 1px solid #dcdcdc; padding:15px; background-color: #fff;">
					<div class="col-lg-4">
						<span class="fa fa-television" style="border: 2px solid #0288D1; border-radius: 80px; padding :10px;"></span> &nbsp; &nbsp;<a href={{ route('user.dashboard') }}>Dashboard</a>
					</div>
					<div class="col-lg-8">
						<ul style="list-style: none;">
							<li style="display: inline;">
								<a class="btn resume_op" id="resume_download" token='{{ csrf_token() }}' data-id="{{ $resume->id }}" data-op="download">Download</a>
								<a class="btn resume_op" id="resume_preview" token='{{ csrf_token() }}' data-id="{{ $resume->id }}" data-op="show">Preview</a>
							</li>
						</ul>
					</div>
				</div>
				<div  style="padding-top: 3%; padding-left:3%; padding-right:3%;">
					<div class="row" style="margin-bottom: 5%;">
						<div class="col-sm-4">
							<span style="font-size: 13px; color: #696969;">Resume name : </span> &nbsp; &nbsp;{{ $resume->name }}
						</div>
						<div class="col-sm-4">

						</div>
					</div>
					{!! Form::open(['id' => 'resume_form','name' => 'resume']) !!}
					<?php
					$i = 0;
					$check = array();
					?>
					<input type="hidden" name="resume_id" id="resume_id" value={{ $resume->id }}>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
							<div class="section_form_div" id={{ 'form_'.$section->id}} >
								<?php $l = 1; ?>

								@if($section->flag == 2)
									<div class="add_new_subsection">
										<button class="btn white add_new_subsection_btn">
											Add New subsection
										</button>
										<div class="add_new_subsection_form">
											<input type="text" class="add_new_subsection_input">
											<button class="add_new_subsection_submit btn" data-token='{{ csrf_token() }}' data-section="{{ $section->id }}" data-resume="{{ $resume->id }}">Add</button>
										</div>
									</div>
								@endif

								@if($section->id == 3)
									<div class="btn" id="github_button">
										<a class="white" href={{ url('auth/github') }}>
											Fetch from GitHub
										</a>
									</div>
								@endif

								@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)
									<div class="mapping_section">
										<?php
										$j = 0;
										$c = array();
										?>

										@foreach($mapping_section->subsections as $subsection)
											@if(!in_array($subsection->id,$c))
												<div class="row">
													<div <?php if($section->flag!=2){ echo "class='col-lg-12'"; } else { echo "class='col-lg-10'"; } ?> >
														{{ Form::label('detail'.$subsection->pivot->id,$subsection->subsection_name ,['class' => 'section'])}}
													</div>
													@if($section->flag==2)
													<div class="col-lg-2">
														<button class="delete_new_section_subsection" data-link="{{ route('resume.deleteNewSubsection',['id' => $resume->id ]) }}"
														 data-token='{{ csrf_token() }}' data-id="{{ $subsection->id }}" data-section="{{ $section->id }}"><span class="fa fa-trash"></span></button>
													</div>
												@endif
													<?php $k = 1; ?>
													@foreach($subsection->mapping_subsections()->where('mapping_section_id',$mapping_section->id)->get()
	                                                as $mapping_subsection)
														<?php
														$content = $mapping_subsection->detail==null?null:$mapping_subsection->detail->content;
														?>
														@if($subsection->flag != 2)
															<div class="col-lg-8">
																{!! Form::text('detail'.$mapping_subsection->id,$content,['class' => 'form-control detail_resume']) !!}<br>
															</div>
														@else
															<div class="col-lg-8">
															<textarea name="{{ 'detail'.$mapping_subsection->id }}"
																	  class="form-control detail_resume" rows="5">{{ $content }}</textarea><br>
															</div>
														@endif
														@if($subsection->flag != 0 and $k > 1)
															<div class="col-sm-3">
																<button class="btn section_subsection"  data-show_id='{{ $section->id }}' data-token='{{ csrf_token() }}'
																		data-link={{ route('resume.deleteSubsection',['mapping_subsection_id' => $mapping_subsection->id,'resume_id' => $resume->id]) }}>
																	<span class="fa fa-minus-circle"></span>
																</button>
															</div>
														@endif
														<?php $k++; ?>
													@endforeach
													@if($subsection->flag != 0)
														<button class="btn section_subsection" data-show_id='{{ $section->id }}' data-token='{{ csrf_token() }}'
															data-link='{{ route('resume.addSubsection',['mapping_section_id' => $mapping_section->id,'subsection_id' => $subsection->id]) }}'>
															<span class="fa fa-plus-circle"></span>
														</button>
													@endif
												</div>
												<?php
												$c[$j] = $subsection->id;
												$j++;
												?>
											@endif
										@endforeach

									</div>

									@if($section->flag == 1 and $l > 1)

										<div>
											<button class="btn input-field col-sm-2 section_subsection" data-show_id='{{ $section->id }}' data-token='{{ csrf_token() }}'
													data-link={{ route('resume.deleteSection',['mapping_section_id' => $mapping_section->id,'resume_id' => $resume->id]) }}>
												<span class="fa fa-minus-circle"></span>
											</button>
										</div>

									@endif
									<?php $l++; ?>
								@endforeach

								@if($section->flag == 1)
									<div>
										<button class="btn input-field col-sm-2 section_subsection" data-show_id='{{ $section->id }}' data-token='{{ csrf_token() }}'
												data-link={{ route('resume.addSection',['section_id' => $section->id,'resume_id' => $resume->id]) }}>
											<span class="fa fa-plus-circle"></span>
										</button>
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
			<div class="col-lg-2">
				<p class="select_template">Select Template</p>
				<ul style="list-style:none; padding:0px; overflow-y:scroll; height:500px;" >
					<li class="thumbnail resume_templates" value="1"><img src="{{ asset('img/template1.jpg') }}" class="img-responsive"></li>
					<li class="thumbnail resume_templates" value="2"><img src="{{ asset('img/template1.jpg') }}" class="img-responsive"></li>
					<li class="thumbnail resume_templates" value="3"><img src="{{ asset('img/template3.png') }}" class="img-responsive"></li>
					<li class="thumbnail resume_templates" value="4"><img src="{{ asset('img/template4.png') }}" class="img-responsive"></li>
					<li class="thumbnail resume_templates" value="5"><img src="{{ asset('img/template5.png') }}" class="img-responsive"></li>
				</ul>
			</div>
		</div>
	</div>
@stop
@section('script')
<div id="#script_create">
	<script type="application/javascript" src={{ asset('js/resume_create.js') }}></script>
	<script>
		function show(obj)
		{
			$(".section_form_div").hide();
			$(".form_navigation").css({"background-color": "#161616","color":"#737373"});

			$("#form_"+obj).show();
			//var count=1;
			$("#form_navigation_"+obj).css({"background-color": "#0288D1", "color": "#fff"});
		}
	</script>
</div>
@stop
