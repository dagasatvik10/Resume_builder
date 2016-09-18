<div class="container pdf">
		<div class="col-xs-10 content">
			<h1 style="text-transform:uppercase;">
				@if(!empty($default_section[1][0]['Name'][0]))
								{{ $default_section[1][0]['Name'][0] }}
				@endif
			</h1>

			<div class="container-fluid personal_details">
				<div class="row">
					<div class="col-xs-6">
						<i class="fi-address-book"></i> &nbsp; &nbsp;
						@if(!empty($default_section[6][0]['Address'][0]))

						<p>{{ $default_section[6][0]['Address'][0] }}</p>

						@endif
					</div>
					<div class="col-xs-6">
						<i class="fa fa-envelope-o"></i>
						@if($default_section[1][0]['Email'] != null)
							@foreach($default_section[1][0]['Email'] as $email)
								@if(!empty($email))
								<p>{{ $email }}</p>
								@endif
							@endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-phone-square"></i>
						@if($default_section[6][0]['Contact No.'] != null)
							@foreach($default_section[6][0]['Contact No.'] as $phone)
								@if(!empty($phone))
								<p>{{ $phone }}</p>
								@endif
							@endforeach
						@endif
					</div>
					<div class="col-xs-6">
						@if($default_section[1][0]['Websites'] != null)
							@foreach($default_section[1][0]['Websites'] as $website)
								@if(!empty($website))
								<p>{{ $website }}</p>
								@endif
							@endforeach
						@endif
					</div>
				</div>
			</div>
			@if($default_section[4] != null)
			<div class="row details">
				<div class="col-xs-2">
					<i class="fa fa-certificate"></i>
				</div>
				<div class="col-xs-10">
					<h3>SKILLS</h3>
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
			</div>
			@endif
			@if($default_section[5] != null)
			<div class="row details">
				<div class="col-xs-2">
					<i class="fa fa-user"></i>
				</div>
				<div class="col-xs-10">
	            <h3>Objective</h3>
	            <p >{{ $default_section[5][0]['Objective'][0] }}</p>
				</div>
			</div>
				@endif
				@if($default_section[2] != null)
				<div class="row details">
					<div class="col-xs-2">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="col-xs-10">
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
						<div class="row details">
							<div class="col-xs-2">
								<i class="fa fa-area-chart"></i>
							</div>
							<div class="col-xs-10">
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
						</div>
					@endif
					@if($default_section[3] != null)
						<div class="row details">
							<div class="row details">
								<div class="col-xs-2">
									<i class="fa fa-area-chart"></i>
								</div>
								<div class="col-xs-10">
										<h3>Projects</h3>
										@foreach($default_section[3] as $section)
											@if($section != null)
													<ul>
														<li class="projects">
															<div class="sub_sections">
																<div class="project_name">
																	{{ $section['Project Name'][0] }}
																</div>
																<div class="project_description">

																</div>
															</div>
														</li>
													</ul>
											@endif
										@endforeach
									</div>
						</div>
					</div>
						@endif
						@if(!empty($new_section))
							<div class="row details">
								@foreach($new_section as $section_id => $section)
									@if($section != null)
									<div class="sections ">
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

	</div>
