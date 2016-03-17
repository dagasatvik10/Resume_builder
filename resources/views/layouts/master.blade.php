<!DOCTYPE html>
<html>
    <title></title>
    <Head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
       <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        $(document).ready(function(){
           /* $("#basicinfo").click(function(){
                $("#project").hide();
                $('#basic_info').show();
                $('#education').hide();
                $('#objective').hide();
                $('#personal_details').hide();
                $('#skill').hide();
                $('#work_experience').hide();
            });
            $("#work_exp").click(function(){
                $("#basic_info").hide();
                $('#project').hide();
                $('#education').hide();
                $('#objective').hide();
                $('#personal_details').hide();
                $('#skill').hide();
                $('#work_experience').show();
            });
            $("#proj").click(function(){
                $("#project").show();
                $('#basic_info').hide();
                $('#education').hide();
                $('#objective').hide();
                $('#personal_details').hide();
                $('#skill').hide();
                $('#work_experience').hide();
            });
            $("#educ").click(function(){
                $("#project").hide();
                $('#basic_info').hide();
                $('#education').show();
                $('#objective').hide();
                $('#personal_details').hide();
                $('#skill').hide();
                $('#work_experience').hide();
            });
            $("#per_det").click(function(){
                $("#project").hide();
                $('#basic_info').hide();
                $('#education').hide();
                $('#objective').hide();
                $('#personal_details').show();
                $('#skill').hide();
                $('#work_experience').hide();
            });
            $("#skills").click(function(){
                $("#project").hide();
                $('#basic_info').hide();
                $('#education').hide();
                $('#objective').hide();
                $('#personal_details').hide();
                $('#skill').show();
                $('#work_experience').hide();
            });
            $("#object").click(function(){
                $("#project").hide();
                $('#basic_info').hide();
                $('#education').hide();
                $('#objective').show();
                $('#personal_details').hide();
                $('#skill').hide();
                $('#work_experience').hide();
            });*/
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });
        });
     </script>   
      

        
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">

        
        </style>
    </Head>
    <body>
          @yield('header')
  
          @yield('form')
          
          @yield('section')
        
          @yield('footer')         
   
  </body>

</html>