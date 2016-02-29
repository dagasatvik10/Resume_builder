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
    <script>function myFunction() {
      //alert("Page is loaded");
    }
    $(document).ready(function(){
    $("#projects").click(function(){
        $("#p").show();
        $('#b').hide();
    });
});
     </script>   
       
        
      </style>
    </Head>
    <body onload="myFunction()">
          @yield('header')
        
          @yield('form')
          
          @yield('section')
        
          @yield('footer')         
   
    </body>

</html>