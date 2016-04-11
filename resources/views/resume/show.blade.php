@extends('layouts.master')

@section('section')
    <div class="container">
        <div id="personal_details">
            <div id="name">{{ @$section[1]['Name'] }}</div>
            <ul id="contact">
                <li id="email">E-mail : {{ @$section[1]['Email'] }}</li>
                <li id="website">Website : {{ @$section[1]['Websites'] }}</li><br>
                <li id="phone">
                    Phone : {{ @$section[7]['Contact No.'] }}<br>
                </li>
                <li id="address">
                    {{ @$section[6]['Address'] }}
                </li>
            </ul>
        </div><br>
        <div id="objective">
            <h3>Objective</h3>
            {{ @$section[5]['Objective'] }}
        </div>
        <div id="work_experience">
            <h3>Work experience</h3>
            <div id="company_name">
                {{ @$section[7]['Company'] }}
            </div>
		<span id="date">
				{{ @$section[7]['Start Date'] }} &#45;{{ @$section[7]['End Date'] }}
		</span>
            <div id="job_title">
                {{ @$section[7]['Job Title'] }}
            </div>
            <div class="other_info">
                {{ @$section[7]['Other Information'] }}
            </div>
        </div>
        {{--<div id="qualifications">--}}
            {{--<h3>Qualifications</h3>--}}
            {{--<ul>--}}
                {{--<li>Certified Public Accountant (CPA)</li>--}}
                {{--<li>Certified Management Accountant (CMA)</li>--}}
                {{--<li>Certified Financial Manager (CFM)</li>--}}
                {{--<li>Certified Fraud Examiner (CFE)</li>--}}
                {{--<li>Certified Financial Planner (CFP)</li>--}}
                {{--<li>Certified Internal Auditor (CIA)</li>--}}
                {{--<li>Enrolled Agent (EA)</li>--}}
                {{--<li>Certified Government Financial Manager (CGFM)</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        <div id="education">
            <h3 >Education</h3>
            <div id="course_name">
                {{ $section[2]['Course Name'] }}
            </div>
            <div id="institution_name">
                {{ $section[2]['Institution'] }}
            </div>
            <div id="passing_year">
                {{ $section[2]['Passing Year'] }}
            </div>
            <div class="other_info">
                Marks: {{ $section[2]['Marks'] }}
            </div>
        </div>
        <div id="skills">
            <h3>Skills</h3>
            <div id="skill_name">
                {{ $section[4]['Skill'] }}
            </div>
        </div>
        {{--@foreach($resume->sections as $section)--}}
            {{--<div id={{ 'section_'.$section->id }}>--}}
                {{--<h3>{{ $section->section_name }}</h3>--}}
                {{--@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)--}}
                    {{--<div class="mapping_section">--}}
                        {{--@foreach($mapping_section->subsections as $subsection)--}}
                            {{--<div class="row" id={{ 'subsection_'.$subsection->id }}>--}}
                                {{--<h5>{{ $subsection->subsection_name }}</h5>--}}
                                {{--@foreach($subsection->detail()->where('mapping_subsection_id',$subsection->pivot->id)->get() as $detail)--}}
                                    {{--<div class="col s12">{{ $detail->content }}</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--@endforeach--}}
        {{--@foreach($resume->sections as $section)--}}
            {{--<div class="row" id={{ 'section_'.$section->id }}>--}}
                {{--<div class="col-sm-4" style="font-weight: bold; font-size: 30px;">{{ $section->section_name }}</div>--}}
                {{--<div class="col-sm-7" style="font-size: 25px;">@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)</div>--}}
                    {{--<div class="mapping_section row">--}}
                        {{--@foreach($mapping_section->subsections as $subsection)--}}
                            {{--<div  id={{ 'subsection_'.$subsection->id }}>--}}
                                {{--<div class="col-sm-4" style="font-size: 25px; font-weight: bold;">{{ $subsection->subsection_name }}</div>--}}
                                {{--@foreach($subsection->detail()->where('mapping_subsection_id',$subsection->pivot->id)->get() as $detail)--}}
                                    {{--<div class="col-sm-8" style="font-size: 25px;">{{ $detail->content }}</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--@endforeach--}}
    </div>
@stop
@section('link')
    <link href='/css/stylesheet1.css' rel="stylesheet">

@stop