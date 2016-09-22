<div class="container-fluid">
	<div class="container header">
		<h1>@if(!empty($default_section[1][0]['Name'][0]))
						{{ $default_section[1][0]['Name'][0] }}
		@endif</h1>
		<div class="row personal_details">
			<div class="col-xs-4">
				@if($default_section[1][0]['Email'] != null)
					@foreach($default_section[1][0]['Email'] as $email)
						@if(!empty($email))
					  <p>{{ $email }}</p>
						@endif
					@endforeach
				@endif
			</div>
			<div class="col-xs-4">
				@if(!empty($default_section[6][0]['Address'][0]))
				<p>{{ $default_section[6][0]['Address'][0] }}</p>
				@endif
			</div>
			<div class="col-xs-4">
				@if($default_section[6][0]['Contact No.'] != null)
					@foreach($default_section[6][0]['Contact No.'] as $phone)
						@if(!empty($phone))
						<p>{{ $phone }}</p>
						@endif
					@endforeach
				@endif
			</div>
		</div>
	</div>
	@if($default_section[4] != null)
	<div class="container row">
		<div class="col-xs-1 icon">
			<i class="fa fa-certificate"></i>
		</div>
		<div class="col-xs-11">
			<h3>SKILLS</h3>
			<ul style="list-style:none;">
			@foreach($default_section[4][0]['Skill'] as $skill)
						<li>
							<div class="sub_sections col-xs-6">
								{{ $skill }}
							</div>
						</li>
			@endforeach
		  </ul>
		</div>
	</div>
		@endif
	<div class="container row">
		<div class="col-xs-1 icon">
			<i class="fa fa-user"></i>
		</div>
			@if($default_section[5] != null)
		<div class="col-xs-11">
			<h3>OBJECTIVE</h3>
				{{ $default_section[5][0]['Objective'][0] }}
			</div>
				@endif
	</div>
@if($default_section[2] != null)
	<div class="container row">
		<div class="col-xs-1 icon">
			<i class="fa fa-book"></i>
		</div>
		<div class="col-xs-11">
			<h3>EDUCATION</h3>
			@foreach($default_section[2] as $section)
			@if($section != null)
			<div  class="row">
				<ul>

				<div class="col-xs-6">
						<li>@if(!empty($section['Course Name'][0]))
					<p>
					{{ $section['Course Name'][0] }}
				</p>
				@endif
				@if(!empty($section['Institution'][0]))
				<p>
					{{ $section['Institution'][0] }}
				</p>
				@endif
				</div>
			<div class="col-xs-6">
				@if(!empty($section['Passing Year'][0]))
				<p>
					Passing Year:
					{{ $section['Passing Year'][0] }}
				</p>
				@endif
				@if(!empty($section['Marks'][0]))
				<p>
					Marks: {{ $section['Marks'][0] }}
				</p>
				@endif
					</li>
			</div>

	</ul>
			@endif
			@endforeach
		</div>
	</div>
</div>
	@endif
		@if($default_section[7] != null)
	<div class="container row">
		<div class="col-xs-1 icon">
			<i class="fa fa-area-chart"></i>
		</div>
		<div class="col-xs-11">
			<h3>WORK EXPERIENCE</h3>
			@foreach($default_section[7] as $section)
				@if($section != null)
					<div class="row">
					<div class="col-xs-6">
						<ul>
						<li>@if(!empty($section['Job Title'][0]))
							<p>
								{{ $section['Job Title'][0] }}
							</p>
						@endif
						@if(!empty($section['Company'][0]))
							<p>
								{{ $section['Company'][0] }}
							</p>
						@endif
						@if(!empty($section['Other Information'][0]))
							<p>
								{{ $section['Other Information'][0] }}
							</p>
						@endif
					</div>
					<div class="col-xs-6">
						@if(!empty($section['Start Date'][0]) or $section['End Date'][0])
							<p>
								{{ $section['Start Date'][0] }} &#45;{{ $section['End Date'][0] }}
							</p>
						@endif
					</div>
				</div></li></ul>
				@endif
			@endforeach
		</div>
	</div>
	@endif
	@if($default_section[3] != null)
	<div class="container row">
		<div class="col-xs-1 icon">
			<i class="fa fa-user"></i>
		</div>
		<div class="col-xs-11">
			<h3>PROJECTS</h3>
			<ul style="list-style:none;">
			@foreach($default_section[3] as $section)
				@if($section != null)
					<li class="projects col-xs-6">
						<div class="sub_sections">
							@if(!empty($section['Project Name'][0]))
								<div class="project_name">
									{{ $section['Project Name'][0] }}
								</div>
								@if(!empty($section['Project Description'][0]))
									<div class="project_description">
										{{ $section['Project Description'][0] }}
									</div>
								@endif
							@endif
						</div>
					</li>
				@endif
			@endforeach
			</ul>
		</div>
	</div>
	@endif
	@if(!empty($new_section))
		@foreach($new_section as $section_id => $section)
			@if($section != null)
				<div class="container row">
					<div class="col-xs-1 icon">
						<i class="fa fa-user"></i>
					</div>
					<div class="col-xs-11">
						<h3>{{ App\Section::find($section_id)->section_name }}</h3>
					@foreach($section[0][App\Section::find($section_id)->subsections->first()->subsection_name] as $subsection)
						<ul>
							@if(!empty($subsection))
								<li class="new_subsection_content">
									{{ $subsection }}
								</li>
							@endif
						</ul>
					@endforeach
				</div>
			</div>
			@endif
		@endforeach
	@endif
</div>
