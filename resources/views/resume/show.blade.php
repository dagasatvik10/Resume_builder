@extends('layouts.resume_show')

@section('link')
	@include('_resume_show_1')
@stop

@section('section')
    <div class="container" id="template">
		@if($default_section[1] != null and $default_section[6] != null)
			<div id="personal_details" >
				@if(!empty($default_section[1][0]['Name'][0]))
					<div id="name" class="col-sm-12 subsections">
						{{ $default_section[1][0]['Name'][0] }}
					</div>
				@endif
				<div id="contact" >
					<div class="row">
						@if($default_section[1][0]['Email'] != null)
							<div id="email" class="col-sm-6 subsections">
								Email:
								@foreach($default_section[1][0]['Email'] as $email)
									@if(!empty($email))
										<span class="email">{{ $email }}</span><br>
									@endif
								@endforeach
							</div>
						@endif
						@if($default_section[1][0]['Websites'] != null)
							<div id='website' class="col-sm-6 subsections">
								Websites:
								@foreach($default_section[1][0]['Websites'] as $website)
									@if(!empty($website))
										<span class="website">{{ $website }}</span><br>
									@endif
								@endforeach
							</div>
						@endif
					</div>
					
					<div class="row">
						@if($default_section[6][0]['Contact No.'] != null)
						<div id="phone" class="col-sm-6 subsections">
							Phone:
							@foreach($default_section[6][0]['Contact No.'] as $phone)
								@if(!empty($phone))
									<span class="phone">{{ $phone }}</span>
								@endif
							@endforeach
						</div>
						@endif
						@if(!empty($default_section[6][0]['Address'][0]))
							<span id="address" class="col-sm-6 subsections">
								Address:
								{{ $default_section[6][0]['Address'][0] }}
							</span>
						@endif
					</div>
				</div>
			</div>
		@endif
        <br>
		<br>
		@if($default_section[5] != null)
			<div id="objective">
				<h3 class="sections">Objective</h3>
				{{ $default_section[5][0]['Objective'][0] }}
			</div>
		@endif
		@if($default_section[7] != null)
			<div id="work_experience">
				<h3 class="sections">Work experience</h3>
				@foreach($default_section[7] as $section)
					@if($section != null)
						<div class="work_experience">
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
			</div>
		@endif
		@if($default_section[2] != null)
			<div id="education">
				<h3 class="sections">Education</h3>
				@foreach($default_section[2] as $section)
					@if($section != null)
						<div class="education">
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
			</div>
		@endif
		@if(!empty($new_section))
			<div id="new_section">
				@foreach($new_section as $section_id => $section)
					@if($section != null)
					<div class="new_section">
						<h3 class="sections">{{ App\Section::find($section_id)->section_name }}</h3>
						<div class="new_subsection">
							@foreach($section[0][App\Section::find($section_id)->subsections->first()->subsection_name] as $subsection)
								@if(!empty($subsection))
									<div class="new_subsection_content">
										{{ $subsection }}
									</div>
								@endif
							@endforeach
						</div>
					</div>
					@endif
				@endforeach
			</div>
		@endif
		@if($default_section[3] != null)
			<div id="project">
				<h3 class="sections">Projects</h3>
				@foreach($default_section[3] as $section)
					@if($section != null)
						<div class="project">
							<div class="project_name">
								{{ $section['Project Name'][0] }}
							</div>
							<div class="project_status">
								{{ $section['Project Status'][0] }}
							</div>
						</div>
					@endif
				@endforeach
			</div>
		@endif
		@if($default_section[4] != null)
			<div id="skills">
				<h3 class="sections">Skills</h3>
				@foreach($default_section[4] as $section)
					@if(!empty($section['Skill'][0]))
						<div class="skill_name">
							{{ $section['Skill'][0] }}
						</div>
					@endif
				@endforeach
			</div>
		@endif
    </div>
@stop
