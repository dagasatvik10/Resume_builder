	@if($default_section[1] != null and $default_section[6] != null)
		<div id="main">
		@if(!empty($default_section[1][0]['Name'][0]))
			<h1 id="name">{{ $default_section[1][0]['Name'][0] }}</h1>
		@endif

		<div id="header">
			@if($default_section[1][0]['Email'] != null)
				@foreach($default_section[1][0]['Email'] as $email)
					@if(!empty($email))
						<span class="email">{{ $email }}</span>
					@endif
				@endforeach
			@endif |
			@if($default_section[6][0]['Contact No.'] != null)
				@foreach($default_section[6][0]['Contact No.'] as $phone)
					@if(!empty($phone))
						<span class="phone">{{ $phone }}</span>
					@endif
				@endforeach
			@endif |
			@if($default_section[1][0]['Websites'] != null)
				@foreach($default_section[1][0]['Websites'] as $website)
					@if(!empty($website))
						<span class="website">{{ $website }}</span>
					@endif
				@endforeach
			@endif |
			@if(!empty($default_section[6][0]['Address'][0]))
				<span id="address" class="col-sm-6 subsections">
					Address:
					{{ $default_section[6][0]['Address'][0] }}
				</span>
			@endif
		</div>
			<br>
			<div class="table">
				@if($default_section[5] != null)
					<h2 id="heading">Objective</h2>
					<p>{{ $default_section[5][0]['Objective'][0] }}</p>
				@endif
			</div>
		</div>
	@endif
		@if($default_section[2] != null)
		<div class="table" >
			<h2 id="heading">Education</h2>
			@foreach($default_section[2] as $section)
				@if($section != null)
					<table>
						<tr>
							<th >Year</th>
							<th>Institute</th>
							<th>Course</th>
							<th>Percentage</th>
						</tr>
						<tr>
							@if(!empty($section['Passing Year'][0]))
								<td class="year">{{ $section['Passing Year'][0] }}</td>
							@endif
							@if(!empty($section['Institution'][0]))
								<td class="institute">{{ $section['Institution'][0] }}</td>
							@endif
							@if(!empty($section['Course Name'][0]))
								<td class="course">{{ $section['Course Name'][0] }}</td>
							@endif
							@if(!empty($section['Marks'][0]))
								<td class="percent">{{ $section['Marks'][0] }}</td>
							@endif
						</tr>
					</table>
				@endif
			@endforeach
		</div>
		@endif
		<div class="table">
			@if($default_section[3] != null)
				<div id="project">
					<h2 id="heading">Projects Undertaken</h2>
					@foreach($default_section[3] as $section)
						@if($section != null)
							<ul>
								<li>
									{{ $section['Project Name'][0] }}
									<div class="project_status">
										{{ $section['Project Description'][0] }}
									</div>
								</li>
							</ul>
						@endif
					@endforeach
				</div>
			@endif
		</div>
		@if($default_section[7] != null)
		<div class="table">
		<h2 id="heading">Work Experience</h2>
			@foreach($default_section[7] as $section)
					@if($section != null)
						<ul>
							<li>
								@if(!empty($section['Company'][0]))
									<span>
										{{ $section['Company'][0] }}
									</span>
								@endif
								@if(!empty($section['Start Date'][0]) or $section['End Date'][0])
									<span >
										{{ $section['Start Date'][0] }} &#45;{{ $section['End Date'][0] }}
									</span>
								@endif
								@if(!empty($section['Job Title'][0]))
									<div >
										{{ $section['Job Title'][0] }}
									</div>
								@endif
								@if(!empty($section))
									<div >
										{{ $section['Other Information'][0] }}
									</div>
								@endif
							</li>
						</ul>
					@endif
			@endforeach
		</div>
		@endif
		@if($default_section[4] != null)
		<div class="table">
			<h2 id="heading">Skill Set</h2>
			@foreach($default_section[4] as $section)
				@if(!empty($section['Skill'][0]))
				<ul>
					<li>
						{{ $section['Skill'][0] }}
					</li>
				</ul>
				@endif
			@endforeach
		</div>
		@endif
		@if(!empty($new_section))
			@foreach($new_section as $section_id => $section)
				@if($section != null)
					<div class="table">
					<h2 id="heading">{{ App\Section::find($section_id)->section_name }}</h2>
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
