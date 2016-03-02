<script type="text/javascript">
    
    $(document).ready(function ()
    {
        $(".add_new").click(function (){
            //$('.delete_new').show();
            $('#education').append("<input type='text'>");
            //alert('hello');
        });        
    });
</script>
<div id="education">
    <div class="row col s8">
            <div class="input-field col s4">
               {!! Form::text('course_name',null,array(
                    'class' => 'validate',
                    'id' => 'course_name'
               )) !!}
                <label for="course_name">Course Name:</label>
            </div>
            <div class="input-field col s4">
                {!! Form::text('institution_name',null,array(
                    'class' => 'validate',
                    'id' => 'institution_name'
                )) !!}
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
    <div class="row col s8">
        <div class="col s4">
            {!! Form::button('Add+',array(
            'class' => 'waves-effect waves-light btn-large add_new',
            'id' => 'add'
        )) !!}
        </div>
        <div class="col s4">
           {!! Form::button('Delete',array(
            'class' => 'waves-effect waves-light btn-large delete_new',
            'id' => 'delete',
            'style' => 'display:none'
        )) !!} 
        </div>
    </div>
</div>
    
<div class ="container">
       
</div>

