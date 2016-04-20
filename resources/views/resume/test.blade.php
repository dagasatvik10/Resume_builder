<div class="col-sm-4">
				<ul class="">
					<?php
						$i = 0;
						$check = array();
					?>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
							<li class=" btn form_navigation" style="margin-bottom: 10px;  background-color: #3f51b5; width: 300px; color: #fff; "
								onclick="show({{ $section->id }})"
								id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
						@endif
				 	@endforeach
				<li class=" btn" style="color: #fff; background-color: #3f51b5;" data-toggle="modal" data-target="#addSectionModal">
					Add New Section<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
				</li>
			</ul>
			</div>
			<div class="col-sm-8">
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
													<div class=" col-sm-8">
														{!! Form::text('detail'.$mapping_subsection->id,$content,['class' => 'form-control detail_resume']) !!}<br>
													</div>
													@if($subsection->flag != 0 and $k > 1)
														<div>
															<button class="btn btn-danger col-sm-2 section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
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