<script type="text/javascript">
    
    $(document).ready(function ()
    {
        var new_education =$('#education').children();
        $("#add_education").click(function (){
            $('#delete_education').show();            
            $(new_education).clone().appendTo('#1');
        }); 
        $('#delete_education').click(function(){
            $('#new_education').detach();
        });     
    });

</script>

<div id="education">
    <div class="row col s8">
        <div class="input-field col s4">
            {!! Form::text('course_name',null,array(
                'class' => 'validate',
                'id' => 'course_name'
               )) 
            !!}
            <label for="course_name">Course Name:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('institution_name',null,array(
                'class' => 'validate',
                'id' => 'institution_name'
                )) 
            !!}
            <label for="institution_name">Institution Name:</label>
        </div>
    </div>
    <div class="row col s8">
        <div class="input-field col s4">
            {!! Form::text('passing_year',null,array(
                 'class' => 'validate',
                 'id' => 'passing_year'
            )) !!}
            <label for="passing_year">Passing Year:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('marks',null,array(
                 'class' => 'validate',
                 'id' => 'marks'
            )) !!}
            <label for="marks">Marks:</label>
        </div>
    </div>
    <div class="col s4">
           <div class="btn col s4" id="delete_education" style="display: none;">Delete</div>
    </div>
</div>

<div id ="1"></div>

<div class="btn col s4" id="add_education">Add+</div>


