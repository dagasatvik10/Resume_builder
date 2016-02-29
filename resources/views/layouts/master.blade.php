<!DOCTYPE html>
<html>
    <title></title>
    <Head>
        {!! Html::style('materialize/css/materialize.css') !!}
        
        <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        
      </style>
    </Head>
    <body>
        <header>
            @yield('header')
        </header
        <main>
             @yield('form')
            @yield('section')
        </main>
        
        @yield('footer')
        
        <!--Import jQuery before materialize.js-->
    {!! Html::script('js/materialize.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script("https://code.jquery.com/jquery-2.1.1.min.js") !!}
    </body>

</html>