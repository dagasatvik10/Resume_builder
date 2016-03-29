<script type="text/javascript">
	
	$(document).ready(function ()
    {
        var new_skill=$('#skill_form').children();
        $("#add_skill").click(function (){
            $('#delete_skill').show();            
            $(new_skill).clone().appendTo('#new_skill');
        }); 
        $('#delete_skill').click(function(){
            $('#new_skill').detach();
        });     
    });
</script>
<div id="skill_form">
	<div class="input-field col s8">
	    {!! Form::text('skills',null,array(
	        'id' => 'skill',
	        'class' => 'validate'
	    )) !!}
	    <label for="skill">Skills:</label>
	    {!! Form::button('Delete',array(
	        'class' => 'waves-effect waves-light btn-large',
	        'id' => 'delete_skill',
	        'style' => 'display:none'
	    )) !!}
	</div>
</div>
<div id="new_skill"></div>
{!! Form::button('Add+',array(
	        'class' => 'waves-effect waves-light btn-large',
	        'id' => 'add_skill'
	  )) 
!!}
	
