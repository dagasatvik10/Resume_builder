<div class="container-fluid">
    @if($default_section[1] != null and $default_section[6] != null)
        <div class="row personal_details">
            <div class="col-xs-5">
                <h3>@if(!empty($default_section[1][0]['Name'][0]))

                        {{ $default_section[1][0]['Name'][0] }}

                @endif</h3>

            </div>
            <div class="col-xs-5">
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
        </div>
    @endif
    <hr>
    @if($default_section[5] != null)
        <div class="row">
            <h2>Objective</h2>
            <p >{{ $default_section[5][0]['Objective'][0] }}</p>
        </div>
    @endif
    @if($default_section[2] != null)
    <div class="row">
        <h2>Education</h2>
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
    <div class="row">
        <h2>Education</h2>
        <p>2014 : Army Public School, Merrut cantt.</p>
    </div>
    <div class="row">
        <h2>Education</h2>
        <p>2014 : Army Public School, Merrut cantt.</p>
    </div>
    <div class="row">
        <h2>Education</h2>
        <p>2014 : Army Public School, Merrut cantt.</p>
    </div>
</div>
