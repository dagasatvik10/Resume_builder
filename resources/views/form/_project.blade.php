<script type="text/javascript">
     $(document).ready(function ()
    {
        var new_project=$('#project_form').children();
        $("#add_project").click(function (){
            $('#delete_project').show();            
            $(new_project).clone().appendTo('#new_project');
        }); 
        $('#delete_project').click(function(){
            $(new_project).detach();
        });     
    });
</script>

<div id="project_form">
    <div class="row col s8">
        <div class="input-field col s4">
            {!! Form::text('project_name',null,array(
                'id' => 'project_name',
                'class' => 'validate'
            )) !!}
            <label for="project_name">Project Name:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::select('project_status', array(
            'd' => 'Deployed', 
            'u' => 'Undeployed',
             )) !!}
            <label>Project Status:</label>
        </div>
    </div>
    <div class="input-field col s4">
        {!! Form::button('Delete', array(
            'class' => 'waves-effect waves-light btn-large',
            'id' => 'delete_project'
        )); !!}
    </div>
</div>
<div id="new_project"></div>
<div class="input-field col s4">
        {!! Form::button('Add+',array(
            'class' =>'waves-effect waves-light btn-large',
            'id' => 'add_project'
        )) !!}
</div>


