<div class="container" style="background-color:#000;">
    @if($default_section[1] != null and $default_section[6] != null)
        <div class="personal_details">
            <div class="col-md-7">
                <h3>First Lastname</h3>
                <p>Computer Science Enginner</p>
            </div>
            <div class="col-md-5">
                <ul>
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
                    @if(!empty($default_section[1][0]['Name'][0]))
                        <li>
                            {{ $default_section[1][0]['Name'][0] }}
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
    <div class="education section">
        <h2>Education</h2>
        <p class="section_details">2014 : Army Public School, Merrut cantt.</p>
    </div>
    <div class="work_experience section">
        <h2>Education</h2>
        <p class="section_details">2014 : Army Public School, Merrut cantt.</p>
    </div>
    <div class="projects section">
        <h2>Education</h2>
        <p class="section_details">2014 : Army Public School, Merrut cantt.</p>
    </div>
    <div class="skills section">
        <h2>Education</h2>
        <p class="section_details">2014 : Army Public School, Merrut cantt.</p>
    </div>
</div>
