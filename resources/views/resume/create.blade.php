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
						<a id="resume_download" href={{ route('resume.download',['id' => $resume->id]) }}><button class="btn-info btn">Download</button></a>
						<a id="resume_preview" href=><button class="btn-info btn">Preview</button></a>
					</li>
				</ul>
			</div>
		</div>
		<div id="addSectionModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
				{!! Form::open(['route' => ['resume.addNewSection',$resume->id]]) !!}
				<div>
					{!! Form::label('section_name','Section Name') !!}
					{!! Form::text('section_name','',['class' => 'form-control']) !!}
				</div>
				<div >
					{!! Form::label('subsection_name','Subsection Name') !!}
					{!! Form::text('subsection_name','',['class' => 'form-control']) !!}
				</div><br>
				<div>
					<button type="submit" class="btn btn-info">Add</button>
				</div>				
				{!! Form::close() !!}<br>
				<div class="modal-footer">
			        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>
		  </div>
		  </div>
		<div class="row" id="resume_full_div">
			<div class="col-sm-4 section">
				<ul class="">
					<?php
						$i = 0;
						$check = array();
					?>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
							<li class=" btn form_navigation" style="margin-bottom: 10px;  background-color: #3f51b5; width: 80%; color: #fff;" onclick="show({{ $section->id }})"
								id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
						@endif
				 	@endforeach
				<li class="btn" style="color: #fff; background-color: #3f51b5;" data-toggle="modal" data-target="#addSectionModal">
					Add New Section<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
				</li>
			</ul>
			</div>
			<div class="col-sm-8 subsection">
				{!! Form::open(['id' => 'resume_form','name' => 'resume']) !!}
					<?php
					$i = 0;
					$check = array();
					?>
					<input type="hidden" name="resume_id" id="resume_id" value={{ $resume->id }}>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
						<div class="section" id={{ 'form_'.$section->id}} >
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
												<div class=" col-sm-12">
													{{ Form::label('detail'.$subsection->pivot->id,$subsection->subsection_name)}}
												</div>
												<?php $k = 1; ?>
												@foreach($subsection->mapping_subsections()->where('mapping_section_id',$mapping_section->id)->get()
                                                as $mapping_subsection)
													<?php
													$content = $mapping_subsection->detail==null?null:$mapping_subsection->detail->content;
													?>
													<div class="col-sm-8">
														{!! Form::text('detail'.$mapping_subsection->id,$content,['class' => 'form-control detail_resume']) !!}<br>
													</div>
													<div class="col-sm-1"></div>
													@if($subsection->flag != 0 and $k > 1)
														<div class="col-sm-3">
															<button class="btn btn-danger section_subsection"  show_id='{{ $section->id }}' token='{{ csrf_token() }}'
															link={{ route('resume.deleteSubsection',['mapping_subsection_id' => $mapping_subsection->id,'resume_id' => $resume->id]) }}>
																Delete {{ $subsection->subsection_name }}
															</button>
														</div>
													@endif
													<?php $k++; ?>
												@endforeach
												@if($subsection->flag != 0)
													<div>
														<button class="btn btn-info add_new section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
														link='{{ route('resume.addSubsection',['mapping_section_id' => $mapping_section->id,'subsection_id' => $subsection->id]) }}'>Add new {{ $subsection->subsection_name }}
														</button>
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
								@if($section->flag == 1 and $l > 1)
									<br>
									<div >
										<button class="btn btn-danger delete section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
										   link={{ route('resume.deleteSection',['mapping_section_id' => $mapping_section->id,'resume_id' => $resume->id]) }}>
											Delete {{ $section->section_name }}
										</button>
									</div>
								@endif
								<?php $l++; ?>
							@endforeach<br>
							@if($section->id == 3)
								<div id="github_button">
									<a class="btn btn-info"
									   href={{ url('auth/github') }}>
										Fetch from GitHub
									</a>
								</div>
							@endif
							@if($section->flag == 1)
								<br>
								<div >
									<button class="btn btn-info add_new section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
											link={{ route('resume.addSection',['section_id' => $section->id,'resume_id' => $resume->id]) }}>
										Add new {{ $section->section_name }}
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
	</div>
@stop

@section('script')
	<script type="application/javascript" src={{ asset('js/resume_create.js') }}></script>
	<script>
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

