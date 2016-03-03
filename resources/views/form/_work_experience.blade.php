
<script type="text/javascript">
    
    $(document).ready(function ()
    {
        var new_experience = $("#work_experience_form").children();
        console.log(new_experience);
        $("#add_work_experience").click(function (){
            $("#delete_work_experience").show();
            $(new_experience).clone().appendTo('#check');
            //$("#new_otherinfo").append('<textarea id="textarea"></textarea>');
        });
        $('#delete_work_experience').click(function(){
            $('#textarea').detach();
        });        
    });
</script>
<div id="work_experience_form">
    <div class="row col s8">
        <div class="input-field col s4">
            <label for="job_title">Job Title:</label>
                {!! Form::text('job_title',null,array(
                    'class' => 'validate',
                    'id' => 'job_title'
                )) !!}
        </div>
        <div class="input-field col s4">
            <label for="company_name">Company Name:</label>
                {!! Form::text('company_name',null,array(
                    'class' => 'validate',
                    'id' => 'company_name'
                )) !!}
        </div>
    </div>
    <div class="row col s8">
        <div class="input-field col s4">
            <label for="start_date">Start Date:</label>
                {!! Form::text('start_date',null,array(
                    'class' => 'validate',
                    'id' => 'start_date'
                )) !!}
        </div>
        <div class="input-field col s4">
            <label for="end_date">End Date:</label>
                {!! Form::text('end_date',null,array(
                    'class' => 'validate',
                    'id' => 'end_date'
                )) !!}
        </div>
    </div>
    <div class="col s4 input-field" id="other_info">
        {!! Form::textarea('other_info',null,array(
                'class' => 'validate',
            )) 
        !!}
        <label for="other_info">Other Information:</label>
    </div>
    <div id="new_otherinfo"></div>
    <br>
    <div class="row col s8 ">
        <div class="btn col s4" id="add_work_experience">Add+</div>
        <div class="btn col s4" id="delete_work_experience" style="display: none;">Delete</div>
    </div>
</div>
<div id='check'>
</div> 
        
          

