<div class="container pdf">
		<div class="col-xs-10 content">
			<h1>
				@if(!empty($default_section[1][0]['Name'][0]))
								{{ $default_section[1][0]['Name'][0] }}
				@endif
			</h1>

			<div class="container-fluid personal_details">
				<div class="row">
					<div class="col-xs-6">
						<i class="fi-address-book"></i> &nbsp; &nbsp;
						@if(!empty($default_section[6][0]['Address'][0]))

						{{ $default_section[6][0]['Address'][0] }}

						@endif
					</div>
					<div class="col-xs-6">
						<i class="fa fa-envelope-o"></i>
						@if($default_section[1][0]['Email'] != null)
							@foreach($default_section[1][0]['Email'] as $email)
								@if(!empty($email))
								{{ $email }}
								@endif
							@endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-phone-square"></i>
						@if($default_section[6][0]['Contact No.'] != null)
							@foreach($default_section[6][0]['Contact No.'] as $phone)
								@if(!empty($phone))
								{{ $phone }}
								@endif
							@endforeach
						@endif
					</div>
					<div class="col-xs-6">
						@if($default_section[1][0]['Websites'] != null)
							@foreach($default_section[1][0]['Websites'] as $website)
								@if(!empty($website))
								{{ $website }}
								@endif
							@endforeach
						@endif
					</div>
				</div>
			</div>
			@if($default_section[4] != null)
			<div class="row details">
				<div class="col-xs-1">
					<i class="fa fa-certificate"></i>
				</div>
				<div class="col-xs-11">
					<h3>SKILLS</h3>
					@foreach($default_section[4] as $section)
						@if(!empty($section['Skill'][0]))
							<ul>
								<li>
									<div class="sub_sections">
										{{ $section['Skill'][0] }}
									</div>
								</li>
							</ul>
						@endif
					@endforeach
				</div>
			</div>
			@endif
			@if($default_section[5] != null)
			<div class="row details">
				<div class="col-xs-1">
					<i class="fa fa-user"></i>
				</div>
				<div class="col-xs-11">
	            <h3>Objective</h3>
	            <p >{{ $default_section[5][0]['Objective'][0] }}</p>
				</div>
			</div>
				@endif
				@if($default_section[2] != null)
				<div class="row details">
					<div class="col-xs-1">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="col-xs-11">
						<h3>EDUCATION</h3>
						<ul>
							<li>
								@foreach($default_section[2] as $section)
								@if($section != null)
								<div  class="sub_sections">
									@if(!empty($section['Course Name'][0]))
									<div class="course_name">
										{{ $section['Course Name'][0] }}
									</div>
									@endif
									@if(!empty($section['Institution'][0]))
									<div class="institution_name">
										{{ $section['Institution'][0] }}
									</div>
									@endif
									@if(!empty($section['Passing Year'][0]))
									<div class="passing_year">
										Passing Year:
										{{ $section['Passing Year'][0] }}
									</div>
									@endif
									@if(!empty($section['Marks'][0]))
									<div class="other_info">
										Marks: {{ $section['Marks'][0] }}
									</div>
									@endif
								</div>
								@endif
								@endforeach
							</li>
						</ul>
					</div>
				</div>
				@endif
				@if($default_section[7] != null)
						<div class="row details">
							<div class="col-xs-1">
								<i class="fa fa-area-chart"></i>
							</div>
							<div class="col-xs-11">
								<h3>WORK EXPERIENCE</h3>
								<ul>
									<li>
										@foreach($default_section[7] as $section)
											@if($section != null)
												<div class="sub_sections">
													@if(!empty($section['Company'][0]))
														<div class="company_name">
															{{ $section['Company'][0] }}
														</div>
													@endif
													@if(!empty($section['Start Date'][0]) or $section['End Date'][0])
														<span class="date">
															{{ $section['Start Date'][0] }} &#45;{{ $section['End Date'][0] }}
														</span>
													@endif
													@if(!empty($section['Job Title'][0]))
														<div class="job_title">
															{{ $section['Job Title'][0] }}
														</div>
													@endif
													@if(!empty($section))
														<div class="other_info">
															{{ $section['Other Information'][0] }}
														</div>
													@endif
												</div>
											@endif
										@endforeach
									</li>
								</ul>
							</div>
						</div>
					@endif
					@if($default_section[3] != null)
						<div class="row details">
							<div class="row details">
								<div class="col-xs-1">
									<i class="fa fa-area-chart"></i>
								</div>
								<div class="col-xs-11">
										<h3>Projects</h3>
										@foreach($default_section[3] as $section)
											@if($section != null)
													<ul>
														<li class="projects">
															<div class="sub_sections">
																<div class="project_name">
																	{{ $section['Project Name'][0] }}
																</div>
																<div class="project_status">
																	{{ $section['Project Description'][0] }}
																</div>
															</div>
														</li>
													</ul>
											@endif
										@endforeach
									</div>
							@endif
						</div>
						@if(!empty($new_section))
							<div class="row details">
								@foreach($new_section as $section_id => $section)
									@if($section != null)
									<div class="sections ">
											{{ App\Section::find($section_id)->section_name }}
									</div>
										<ul>
										<li>
											<div class="sub_sections">
												@foreach($section[0][App\Section::find($section_id)->sub_sections->first()->subsection_name] as $subsection)
													@if(!empty($subsection))
														<div class="new_subsection_content">
															{{ $subsection }}
														</div>
													@endif
												@endforeach
											</div>
										</li>
									</ul>
									@endif
								@endforeach
							</div>
						@endif

	</div>
