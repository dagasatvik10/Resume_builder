$(document).ready(function(){
    var resumesubmiturl = 'http://localhost:8000/resume';

    $('#resume_submit').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: resumesubmiturl,
            type: "POST",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log('Error:',data);
            }
        });

    });

});


$('#resume_submit').click(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: resumesubmiturl,
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data){
            console.log(data);
        },
        error: function(data){
            console.log('Error:',data);
        }
    {{--@foreach($resume->mapping_sections as $mapping_section)
				@foreach($mapping_section->mapping_subsections as $mapping_subsection)
        {{ 'input'.$mapping_subsection->id }}:
        $("{{'#input_'.$mapping_subsection->id}}").val() ,
				@endforeach
				@endforeach--}}

});

});