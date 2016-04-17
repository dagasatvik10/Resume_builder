$(document).ready(function(){

    show(1);

    linkEvent();
});

function linkEvent(){

    $('.detail_resume').change(function (e) {
        var resumeData, resumeId, myUrl;

        resumeData = $('#resume_form').serialize();

        resumeId = $('#resume_id').val();

        myUrl = 'http://localhost:8000/resume' + '/' + resumeId ;

        $.ajax({
            type: 'POST',
            data: resumeData,
            url: myUrl,
            dataType: 'json'
        })

    });


    $('.section_subsection').click(function (e) {
        var url, data, sectionId;

        e.preventDefault();

        url = $(this).attr('link');

        data = {
            _token: $(this).attr('token')
        };

        sectionId = $(this).attr('show_id');

        $.ajax({
            type: 'POST',
            data: data,
            dataType: 'json',
            url: url,
            success: function (data) {
                $('#resume_full_div').empty().html(data.html);
                show(sectionId);
                linkEvent();
            }
        });
    });
}