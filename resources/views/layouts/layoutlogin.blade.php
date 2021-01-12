<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')


    <!-- Scripts -->
    @yield('javascript')
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles-->
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Login.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="py-4 container-custome">
            @yield('content')
        </div>

        <footer class="navbar navbar-expand-md text-white footer" style="background-color: #00587A">
            <div class="container-fluid" style="padding: 10px 15px">

                <div class="navbar-nav mr-auto">
                    <h6 style="margin: 0">
                         Copyright © 2020 TemuTim Group
                    </h6>
                </div>

                <div class="navbar-nav ml-auto">
                    <h6 style="margin: 0">
                        Need help? Please <a href="#" class="text-white"><b>Contact Us</b></a>
                    </h6>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
