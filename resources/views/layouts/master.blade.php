<!DOCTYPE html>
<html>
    <title></title>
    <Head>
        {!! Html::style('materialize/css/materialize.css') !!}
        {!! Html::script('js/materialize.min.js') !!}
    </Head>
    <body>
        <div id="header">
            @yield('header')
        </div>
        <div id="form">
            @yield('form')
            @yield('section')
        </div>
        @yield('footer')
    </body>

</html>