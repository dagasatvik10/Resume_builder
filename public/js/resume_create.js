$(document).ready(function(){
    show(1);

    linkEvent();

});

function linkEvent(){

    $('.detail_resume').change(function (e) {
        var resumeData, resumeId, myUrl;

        resumeData = $('#resume_form').serialize();

        resumeId = $('#resume_id').val();

        myUrl = window.location.href;

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

        url = $(this).data('link');

        data = {
            _token: $(this).data('token')
        };

        sectionId = $(this).data('show_id');

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

    var resume_design;

    $('.resume_templates').mouseover(function () {
        $(this).css('border', "solid 1px black");
    }).mouseout(function () {
        if($(this).val() != resume_design)
            $(this).css('border', "solid 1px #ddd");
        else {
            $(this).css('border', "solid 1px red");
        }
    }).click(function () {
        $('.resume_templates').css('border', "solid 1px #ddd");
        $(this).css('border', "solid 1px red");
        resume_design = $(this).val();
        console.log(resume_design);
    });

    $('.resume_op').click(function (e) {
        var id, op;

        e.preventDefault();

        if (!resume_design) {
            alert('Please select a template first');
        } else {

            id = $(this).data('id');
            op = $(this).data('op');

            window.location.href = '/resume/' + id + '/' + op + '/' + resume_design;
        }
    });
}

