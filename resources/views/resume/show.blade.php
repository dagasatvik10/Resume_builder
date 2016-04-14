@extends('layouts.resume_show')

@section('section')
    <div class="container">
		@if($default_section[1] != null and $default_section[6] != null)
			<div id="personal_details">
				@if(!empty($default_section[1][0]['Name'][0]))
					<div id="name">
						{{ $default_section[1][0]['Name'][0] }}
					</div>
				@endif
				<div id="contact">
					@if($default_section[1][0]['Email'] != null)
						<div id="email">Email:
							@foreach($default_section[1][0]['Email'] as $email)
								@if(!empty($email))
									<div class="email">{{ $email }}</div>
								@endif
							@endforeach
						</div>
					@endif
					@if($default_section[1][0]['Websites'] != null)
						<div id='website'>
							Websites:
							@foreach($default_section[1][0]['Websites'] as $website)
								@if(!empty($website))
									<div class="website">{{ $website }}</div>
								@endif
							@endforeach
						</div>
					@endif
					@if($default_section[6][0]['Contact No.'] != null)
						<div id="phone">
							Phone:
							@foreach($default_section[6][0]['Contact No.'] as $phone)
								@if(!empty($phone))
									<div class="phone">{{ $phone }}</div>
								@endif
							@endforeach
						</div>
					@endif
					@if(!empty($default_section[6][0]['Address'][0]))
						<div id="address">
							{{ $default_section[6][0]['Address'][0] }}
						</div>
					@endif
				</div>
			</div>
		@endif
        <br>
		<br>
		@if($default_section[5] != null)
			<div id="objective">
				<h3>Objective</h3>
				{{ $default_section[5][0]['Objective'][0] }}
			</div>
		@endif
		@if($default_section[7] != null)
			<div id="work_experience">
				<h3>Work experience</h3>
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
				<h3 >Education</h3>
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
						<h3>{{ App\Section::find($section_id)->section_name }}</h3>
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
				<h3>Projects</h3>
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
				<h3>Skills</h3>
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
@section('link')
    {{--<link href='/css/resume_show.css' rel="stylesheet">--}}
@stop