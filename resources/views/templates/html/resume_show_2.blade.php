<div class="container ">

	<div id="sidebar"> 

		<div id="name">
			<span id="name">
				@if(!empty($default_section[1][0]['Name'][0]))
					{{ $default_section[1][0]['Name'][0] }}
				@endif
			</span>
			<span id="profession">Web Designer</span>
			<span id="contact">Contact
				<p id="email"><img src="{{ asset('img/email.png') }}" height="15vmin" width="15vmin"> @if($default_section[1][0]['Email'] != null)
					@foreach($default_section[1][0]['Email'] as $email)
						@if(!empty($email))
					  <p>{{ $email }}</p>
						@endif
					@endforeach
				@endif</p>
				<p id="phone"><img src="{{ asset('img/phone.png') }}" height="15vmin" width="15vmin"> @if($default_section[6][0]['Contact No.'] != null)
					@foreach($default_section[6][0]['Contact No.'] as $phone)
						@if(!empty($phone))
						<p>{{ $phone }}</p>
						@endif
					@endforeach
				@endif</p>
				<p id="website"><img src="{{ asset('img/website.png') }}" height="15vmin" width="15vmin">  forum.xda-developers.com</p>
			</span>
			<span id="brief">Objective
				@if($default_section[5] != null)
				<p id="aboutdesc">{{ $default_section[5][0]['Objective'][0] }}</p>
				@endif
			</span>
		</div>

	</div>


<div id="description"> 
	@if($default_section[7] != null)
	<span id="experience">
		<p id="title"><img src="{{ asset('img/work.png') }}" height="30vmin" width="30vmin" style="margin-right: 3vmin;">WORK EXPERIENCE</p>
		<p id="text">@foreach($default_section[7] as $section)
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
			@endforeach</p>
	</span>
		@endif
		@if($default_section[2] != null)
	<span id="education">
		<p id="title"><img src="{{ asset('img/edu.png') }}" height="30vmin" width="30vmin" style="margin-right: 3vmin;">EDUCATION</p>
		<p id="text">
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
			@endforeach</p>
	</span>
		@endif
	<span id="skills">
		<p id="title"><img src="{{ asset('img/skill.png') }}" height="30vmin" width="30vmin" style="margin-right: 3vmin;">SKILLS</p>
		<p id="text"><ul style="list-style:none;">
			@foreach($default_section[4][0]['Skill'] as $skill)
						<li>
							<div class="sub_sections col-xs-6">
								{{ $skill }}
							</div>
						</li>
			@endforeach
		  </ul></p>
	</span>
	@if($default_section[3] != null)
	<span id="awards">
		<p id="title"><img src="{{ asset('img/award.png') }}" height="30vmin" width="30vmin" style="margin-right: 3vmin;">PROJECTS</p>
		<p id="text"><ul style="list-style:none;">
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
			</ul></p>
	</span>
		@endif
</div>


</div>
</body>
</html>
