
<script type="text/javascript">
    
    $(document).ready(function ()
    {
        $("#add").click(function(){
            $('#delete').show();
            $('.container').append($("#work_experience_form"));
           $('#delete').click(function(){
                $('.container').detach();
            });
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
        <div class="col s4 input-field" class="other">
                
                {!! Form::textarea('other_info',null,array(
                    'class' => 'validate',
                    'id' => 'other_info'
                    )) 
                !!}
                <label for="other_info">Other Information:</label>
            </div>
        <br>
        <div class="row col s8 ">
            <div class=" col s4">
                <!--{!! Form::button('Add+',array(
                    'class' => 'waves-effect waves-light btn-large add',
                    'id' => 'add'
                )) !!}-->
                <button id="add">Add+</button>
            </div>
            <div class="col s4">
                <!--{!! Form::button('delete',array(
                    'class' => 'waves-effect waves-light btn-large delete',
                    'id' => 'delete',
                    'style' => 'display:none'
                )) !!}-->
                <button id="delete" style="display: none;">Delete</button>
            </div>
        </div>
        </div> 
        <div class="container">
            
        </div>   

