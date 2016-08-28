<div class="container">
    @if($default_section[1] != null and $default_section[6] != null)
        <div id="personal_details">
            <div id="contact" >
                @if($default_section[1][0]['Email'] != null)
                    <div id="email">
                        @foreach($default_section[1][0]['Email'] as $email)
                            @if(!empty($email))
                                {{ $email }}<br>
                            @endif
                        @endforeach
                    </div>
                @endif
                @if($default_section[1][0]['Websites'] != null)
                    <div id='website'>
                        @foreach($default_section[1][0]['Websites'] as $website)
                            @if(!empty($website))
                                {{ $website }}
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
            @if($default_section[6][0]['Contact No.'] != null)
                <div id="phone">
                    @foreach($default_section[6][0]['Contact No.'] as $phone)
                        @if(!empty($phone))
                            <span class="phone">{{ $phone }}</span>
                        @endif
                    @endforeach
                </div>
            @endif
            @if(!empty($default_section[6][0]['Address'][0]))
                <div id="address">
                    {{ $default_section[6][0]['Address'][0] }}
                </div>
            @endif
            @if(!empty($default_section[6][0]['Country'][0]))
                <div id="country">
                    {{ $default_section[6][0]['Country'][0] }}
                </div>
            @endif

            @if(!empty($default_section[1][0]['Name'][0]))
                <div id="name">
                    {{ $default_section[1][0]['Name'][0] }}
                </div>
            @endif
        </div>
    @endif
    <br>
    <br>
    @if($default_section[5] != null)
        <div id="objective">
            <div class="sections">
                Objective
            </div>
            <div class="sub_sections">{{ $default_section[5][0]['Objective'][0] }}</div>
        </div>
    @endif
    @if($default_section[7] != null)
        <div id="work_experience" >
            <div class="sections ">
                Work experience
            </div>
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
    @endif
    @if($default_section[2] != null)
        <div id="education" >
            <div class="sections">Education</div>
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
    @endif
    @if(!empty($new_section))
        <div id="new_section">
            @foreach($new_section as $section_id => $section)
                @if($section != null)
                    <div class="sections">
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
    @if($default_section[3] != null)
        <div id="project" >
            <div class="sections ">Projects</div>
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
        </div>
    @endif
    @if($default_section[4] != null)
        <div id="skills" >
            <div class="sections">Skills</div>
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
    @endif
</div>