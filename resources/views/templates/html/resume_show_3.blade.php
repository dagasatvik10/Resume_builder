<div class="container-fluid">
    @if($default_section[1] != null and $default_section[6] != null)
        <div class="row personal_details">
            <div class="col-xs-5">
                <h2>
                  @if(!empty($default_section[1][0]['Name'][0]))
                      {{ $default_section[1][0]['Name'][0] }}
                  @endif
              </h2>
            </div>
            <div class="col-xs-7">
                <ul style="list-style:none;">
                    @if($default_section[1][0]['Email'] != null)
                        <li>Email:
                            @foreach($default_section[1][0]['Email'] as $email)
                                @if(!empty($email))
                                    {{ $email }}
                                @endif
                            @endforeach
                        </li>
                    @endif
                    @if($default_section[1][0]['Websites'] != null)
                        <li>
                            Websites:
                            @foreach($default_section[1][0]['Websites'] as $website)
                                @if(!empty($website))
                                    {{ $website }}
                                @endif
                            @endforeach
                        </li>
                    @endif
                    @if($default_section[6][0]['Contact No.'] != null)
                        <li>
                            Phone:
                            @foreach($default_section[6][0]['Contact No.'] as $phone)
                                @if(!empty($phone))
                                  {{ $phone }}
                                @endif
                            @endforeach
                        </li>
                    @endif
                    @if(!empty($default_section[6][0]['Address'][0]))
                        <li>
              						<p>
              							Address:{{ $default_section[6][0]['Address'][0] }}
              						</p>
                        </li>
                    @endif

                </ul>
            </div>
            <hr>
        </div>
    @endif
    @if($default_section[4] != null)
  	<div class="row">
  			<h3>SKILLS</h3>
  				@if(!empty($section['Skill'][0]))
  					<ul style="list-style:none;">
              @foreach($default_section[4][0]['Skill'] as $skill)
        						<li>
        							<div class="sub_sections col-xs-6">
        								{{ $skill }}
        							</div>
        						</li>
        			@endforeach
  					</ul>
  				@endif
  	</div>
  	@endif
    @if($default_section[5] != null)
        <div class="row">
            <h3>Objective</h3>
            <p id="objective">{{ $default_section[5][0]['Objective'][0] }}</p>
        </div>
    @endif
    @if($default_section[2] != null)
    <div class="row">
        <h3>Education</h3>
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
    @endif
    @if($default_section[7] != null)
	<div class="row">
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
						@if(!empty($section))
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
	@endif
  @if($default_section[3] != null)
  <div class="row">
      <h3>PROJECTS</h3>
      @foreach($default_section[3] as $section)
        @if($section != null)
            <ul style="list-style:none;">
              <li class="projects">
                <div class="sub_sections">
                  <div class="project_name">
                    {{ $section['Project Name'][0] }}
                  </div>
                  <div class="project_description">
                      {{ $section['Project Description'][0] }}
                  </div>
                </div>
              </li>
            </ul>
        @endif
      @endforeach
    </div>
  @endif
  @if(!empty($new_section))
    @foreach($new_section as $section_id => $section)
      @if($section != null)
        <div class="row">
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
      @endif
    @endforeach
  @endif
</div>
