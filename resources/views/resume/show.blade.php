@extends('layouts.master')

@section('section')
    <div class="container">
        <div id="personal_details">
            <div id="name">{{ $default_section[1][0]['Name'][0] }}</div>
            <ul id="contact">
                @foreach($default_section[1][0]['Email'] as $email)
					<li class="email">E-mail : {{ $email }}</li>
				@endforeach
                @foreach($default_section[1][0]['Websites'] as $website)
					<li class="website">Website : {{ $website }}</li>
				@endforeach
				@foreach($default_section[6][0]['Contact No.'] as $phone)
                <li class="phone">
                    Phone : {{ $phone }}<br>
                </li>
				@endforeach
                <li id="address">
                    {{ $default_section[6][0]['Address'][0] }}
                </li>
            </ul>
        </div>
        <br>
        <div id="objective">
            <h3>Objective</h3>
            {{ $default_section[5][0]['Objective'][0] }}
        </div>
        <div id="work_experience">
            <h3>Work experience</h3>
			@foreach($default_section[7] as $default_section)
            <div id="company_name">
				{{ $default_section['Company'][0] }}
            </div>
			<span id="date">
				{{ $default_section['Start Date'][0] }} &#45;{{ $default_section['End Date'][0] }}
			</span>
            <div id="job_title">
                {{ $default_section['Job Title'][0] }}
            </div>
            <div class="other_info">
                {{ $default_section['Other Information'][0] }}
            </div>
			@endforeach
        </div>
        <div id="education">
            <h3 >Education</h3>
			@foreach($default_section[2] as $default_section)
            <div id="course_name">
                {{ $default_section['Course Name'][0] }}
            </div>
            <div id="institution_name">
                {{ $default_section['Institution'][0] }}
            </div>
            <div id="passing_year">
                {{ $default_section['Passing Year'][0] }}
            </div>
            <div class="other_info">
                Marks: {{ $default_section['Marks'][0] }}
            </div>
			@endforeach
        </div>
        <div id="skills">
            <h3>Skills</h3>
			@foreach($default_section[4] as $default_section)
            <div id="skill_name">
                {{ $default_section['Skill'][0] }}
            </div>
			@endforeach
        </div>
    </div>
@stop
@section('link')
    <link href='/css/resume_show.css' rel="stylesheet">
@stop