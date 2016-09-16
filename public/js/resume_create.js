$(document).ready(function(){
    show(1);
    linkEvent();
});

function linkEvent(){

    // hide add new section form
    $('#add_new_section_form').hide();
    // hide the add new subsection form when new section is created
    $('.add_new_subsection_form').hide();

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
        //console.log(resume_design);
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

    // show form for adding new section
    $('#add_new_section_btn').click(function (e) {
      $(this).next().toggle();
      //linkEvent();
    });

    // Show form for adding new subsection
    $('.add_new_subsection_btn').click(function (e) {
      e.preventDefault();
      $(this).next().toggle();
      //linkEvent();
    });

// Ajax request to add new section to the resume
    $('#add_new_section_submit').click(function (e) {
      var url = window.location.href + '/newSection',
        section_name,
        token = $(this).data('token');

      section_name = $('#add_new_section_input').val();

      //e.preventDefault();

      if (section_name) {
;        $.post(url, {
          section_name: section_name,
          _token: token
        }, function (data) {
          $('#resume_full_div').empty().html(data.html);
          show(data.sectionId);
          linkEvent();
        });
      } else {
        alert('Section Name cannot be empty');
      }
    });

// Ajax request to add new subsections to the newly added section
    $('.add_new_subsection_submit').click(function (e) {
      var url = window.location.href + '/newSubsection',
        sectionId = $(this).data('section'),
        token = $(this).data('token'),
        subsection_name = $(this).parent().prev().children().val();
        //console.log(subsection_name);

        e.preventDefault();

        if(subsection_name) {
          $.post(url, {
            section_id: sectionId,
            _token: token,
            subsection_name: subsection_name
          }, function (data) {
            //console.log(data);
            $('#resume_full_div').empty().html(data.html);
            show(sectionId);
            linkEvent();
          });
        } else {
          alert('Subsection Name cannot be empty');
        }
    });

    $('.delete_new_section_subsection').click(function (e) {
      var url = $(this).data('link'),
        token = $(this).data('token'),
        id = $(this).data('id')
        sectionId = $(this).data('section');

        e.preventDefault();

        $.ajax({
          url: url,
          data: { _token: token, id: id },
          type: 'DELETE',
          success: function (data) {
            //console.log(data);
            $('#resume_full_div').empty().html(data.html);

            if(sectionId)
              show(sectionId);
            else
              show(1);

            linkEvent();
          }
        });
    });

}
