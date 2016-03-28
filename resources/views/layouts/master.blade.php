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
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });

            function show(division) {
                $(document).ready(function () {
                    $("fieldset:not(#division)").hide();
//                    $('#'+division).show();
                });
            }
     </script>   


        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            $(document).ready(function(){
                show(1);
                $('#resume_submit').click(function(){
                   $('#resume').submit();
                });
            });

            function show(obj)
            {
                //console.log(obj);
                @foreach($resume->sections as $section)
                    $("#form_{{ $section->id }}").hide();
                @endforeach
                $("#form_"+obj).show();
            }

            $(document).ready(function(){
                //the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });
        </script>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          @yield('header')
  
          @yield('form')
          
          @yield('section')
        
          @yield('footer')         
   
  </body>

</html>