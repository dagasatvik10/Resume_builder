
	<div class="container" class="body">
		@if($default_section[1] != null and $default_section[6] != null)
			<div class="personal_details">
				<div style="float:left;">
					<h3> @if(!empty($default_section[1][0]['Name'][0]))
							{{ $default_section[1][0]['Name'][0] }}
						@endif
						</h3>
				</div>
				<div style="float:right;">
					<ul style="list-style:none;">
						@if($default_section[1][0]['Email'] != null)
							<li>Email:
									@foreach($default_section[1][0]['Email'] as $email)
										@if(!empty($email))
											<span>{{ $email }}</span><br>
										@endif
									@endforeach
							</li>
						@endif
						@if($default_section[1][0]['Websites'] != null)
							<li>
								Websites:
									@foreach($default_section[1][0]['Websites'] as $website)
										@if(!empty($website))
											<span>{{ $website }}</span><br>
										@endif
									@endforeach
							</li>
						@endif
						@if($default_section[6][0]['Contact No.'] != null)
							<li>
								Phone:
									@foreach($default_section[6][0]['Contact No.'] as $phone)
										@if(!empty($phone))
											<span>{{ $phone }}</span>
										@endif
									@endforeach
							</li>
						@endif
						@if(!empty($default_section[6][0]['Address'][0]))
							<li>
								<span>
									Address:
									{{ $default_section[6][0]['Address'][0] }}
								</span>
							</li>
						@endif
					</ul>
				</div>
			</div>
		@endif
		<hr>
		@if($default_section[5] != null)
			<div class="objective section">
				<h2>Objective</h2>
				<p class="section_details">{{ $default_section[5][0]['Objective'][0] }}</p>
			</div>
		@endif
		@if($default_section[2] != null)
			<div class="education section">
				<h2>Education</h2>
				<p class="section_details">
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
				</p>
			</div>
		@endif
		@if($default_section[7] != null)
			<div class="work_experience section">
				<h2>Education</h2>
				<p class="section_details">
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
				</p>
			</div>
		@endif
		@if($default_section[3] != null)
		<div class="projects section">
			<h2>Projects</h2>
			<p class="section_details">
				@foreach($default_section[3] as $section)
					@if($section != null)
							<ul>
								<li class="projects">
									<div class="sub_sections">
										<div class="project_name">
											{{ $section['Project Name'][0] }}
										</div>
										<div class="project_status">
											{{ $section['Project Status'][0] }}
										</div>
									</div>
								</li>								
							</ul>						
					@endif
				@endforeach
			</p>
		</div>
		@endif
		@if($default_section[4] != null)
		<div class="skills section">
			<h2>Skills</h2>
			<p class="section_details">
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
			</p>
		</div>
		@endif
	</div>	
