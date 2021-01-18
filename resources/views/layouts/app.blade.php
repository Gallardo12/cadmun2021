<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }} - @yield('page-name')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Essential META Tags -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }} - @yield('page-name')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image-url')">
    <meta property="og:url" content="@yield('page-url')">
    <meta name="twitter:card" content="@yield('summary')">
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }} - @yield('page-name')">
    <meta name="twitter:image:alt" content="@yield('page-name') - Background">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--START HEADER-->
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!--LOGO-->
                <a href="/">
                    <img src="images/Logos/CADMUN_transparent_logo.png" alt="LOGO" style="width:185px;height:185px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav pl-md-5 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/secretariat">Secretariat</a>
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="/speaker !--">Speaker</a>
                        </li-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Committees</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item active" href="/general-assembly">GA</a>
                                <a class="dropdown-item" href="/security-council">SC</a>
                                <a class="dropdown-item" href="/world-health-organization">WHO</a>
                                <a class="dropdown-item" href="/ecosoc">ECOSOC</a>
                                <a class="dropdown-item" href="/un-women">UN Women</a>
                                <a class="dropdown-item" href="/iaea">IAEA</a>
                                <a class="dropdown-item" href="/unoosa">UNOOSA</a>
                                <a class="dropdown-item" href="/human-rights">HR</a>
                                <a class="dropdown-item" href="/international-court-justice">ICJ</a>
                                <a class="dropdown-item" href="/league-third-reich">LTR</a>
                                <a class="dropdown-item" href="/futuristic-world-league">FWL</a>
                                <a class="dropdown-item" href="/futuristic-world-league-6to">FWL (6th Graders)</a>
                                <a class="dropdown-item" href="/un-peacekeeping-program">UN Peacekeeping Program</a>
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li-->
                        <!-- Authentication Links-->
                        @guest
                            @if(Route::has('login'))
                                <!--li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li-->
                            @endif

                            @if(Route::has('register'))
                                <!--li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li-->
                            @endif
                        @else
                            <!--li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none"-->
                            @csrf
                            <!--/form>
                                </div>
                            </li-->
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="/registration">Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="top-shadow"></div>
    <!-- END HEADER-->

    @yield('content')

    <!--START FOOTER-->
    <footer class="site-footer bg-dark" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h4>About Us</h4>
                    <p class="mb-3 text-white">Colegio Americano de Durango Model of United Nations</p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="https://www.facebook.com/cadmun.asd" class="p-2 text-white"><span
                                    class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/cadmun/" class="p-2 text-white"><span
                                    class="fa fa-instagram"></span></a></li>
                        <li><a href="http://cadurango.mx/" class="p-2 text-white"><span
                                    class="fa fa-briefcase"></span></a></li>
                        <li><a href="https://www.facebook.com/ColegioAmericanoDeDurango" class="p-2 text-white"><span
                                    class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/americanschoolofdurango/" class="p-2 text-white"><span
                                    class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-5 mb-3 pl-md-5">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block text-white">Address:</span>
                            <span class="text-white"> Av. Tec Milenio #201, El Nayar, 34194, Victoria de Durango,
                                Durango, México</span></li>
                        <li class="d-block">
                            <span class="d-block text-white">Telephone:</span>
                            <span class="d-block text-white">+52 618 308 5518</span>
                            <span class="d-block text-white">+52 618 217 0976</span>
                        </li>
                        <li class="d-block">
                            <span class="d-block text-white">Email:</span>
                            <span class="d-block text-white">secretariat@cadmun.org</span>
                            <span class="d-block text-white">advisor@cadmun.org</span>
                            <span class="d-block text-white">secretary.general@cadmun.org</span>
                            <span class="d-block text-white">vice.secretary.general@cadmun.org</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled footer-link">
                        <li><a href="#" class="text-white">Secretariat</a></li>
                        <li><a href="#" class="text-white">Committees</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <p class="text-white">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | This template is made
                        with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank" class="text-primary">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HVL66LGZE1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HVL66LGZE1');

    </script>
</body>

</html>
