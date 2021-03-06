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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md text-white" style="background-color: #00587A">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo_temutim.png" alt="Logo TemuTim" style="width: 150px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @if (Auth::user())
                    <form class="form-inline" action="/result" method="GET">
                        <input class="form-control mr-sm-2" name ="search" type="text" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                @endif

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white ml-4 mr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white ml-4 mr-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                        @if (Auth::user()->status == "regular")
                            <form class="nav-item form-premium"  action="{{route('packageoffer')}}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-premium">PREMIUM</button>
                            </form>
                        @endif
                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/storage/profile_pictures/{{Auth::user()->profile_picture}}" alt="Profile Image" class="profile-picture">

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('profile/'.Auth::user()->id) }}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                                </div>


                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @if(session('msg'))
                <div class="alert alert-success" role="alert" style="margin: 20px">
                    {{ session('msg') }}
                </div>
            @endif
        </div>

        <div class="container">
            @if(session('fail'))
                <div class="alert alert-danger" role="alert" style="margin: 20px; ">
                    {{ session('fail') }}
                </div>
            @endif
        </div>

        <div class="py-4">
            @yield('content')
        </div>

        <footer id="footer" class="navbar navbar-expand-md text-white footer" style="background-color: #00587A">
            <div class="container-fluid" style="padding: 10px 15px">

                <div class="navbar-nav mr-auto">
                    <h6 style="margin: 0">
                         Copyright © 2020 TemuTim Group
                    </h6>

                </div>

                <div class="navbar-nav ml-auto">
                    <h6 style="margin: 0">
                        Need help? Please <a href="/contact" class="text-white"><b>Contact Us</b></a>
                    </h6>

                </div>

            </div>

        </footer>

    </div>
</body>
</html>
<script>
    window.addEventListener("load", activateStickyFooter);

    function activateStickyFooter() {
        adjustFooterCssTopToSticky();
        window.addEventListener("resize", adjustFooterCssTopToSticky);
    }
    function adjustFooterCssTopToSticky() {
        const footer = document.querySelector("#footer");
        const bounding_box = footer.getBoundingClientRect();
        const footer_height = bounding_box.height;
        const window_height = window.innerHeight;
        const above_footer_height = bounding_box.top - getCssTopAttribute(footer);
        if (above_footer_height + footer_height <= window_height) {
            const new_footer_top = window_height - (above_footer_height + footer_height);
            footer.style.top = new_footer_top + "px";
        } else if (above_footer_height + footer_height > window_height) {
            footer.style.top = null;
        }
    }

    function getCssTopAttribute(htmlElement) {
        const top_string = htmlElement.style.top;
        if (top_string === null || top_string.length === 0) {
            return 0;
        }
        const extracted_top_pixels = top_string.substring(0, top_string.length - 2);
        return parseFloat(extracted_top_pixels);
    }

</script>
