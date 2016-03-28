<!DOCTYPE html>
<html>
    <title></title>

    <Head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        @yield('script')

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href={{ route('user.dashboard') }} class="" style="margin-left: 80px;">
                    Create, Maintain and publish your CV's for free
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>{{ $user->name }}</li>
                    <li><a href={{ url('/logout') }}>Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="row card-panel" style="margin-top: 0px; height: 100px;">
            <div class="col s8 brand-logo">
                <a href={{ route('home') }}><i class="medium material-icons">library_books</i>Resume Builder</a>
            </div>
            <div class="col s2">
            </div>
            <div class="col s2">
            </div>
        </div>

        @yield('section')

        @yield('footer')
    </body>
</html>