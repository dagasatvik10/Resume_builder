

	<div class="input-field col s8">
	    {!! Form::text('skills',null,array(
	        'id' => 'skill',
	        'class' => 'validate'
	    )) !!}
	    <label for="skill">Skills:</label>
	    {!! Form::button('Add+',array(
	        'class' => 'waves-effect waves-light btn-large'
	    )) !!}
	</div>

