<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Aviato E-Commerce Template">

    <meta name="author" content="Themefisher.com">

    <title>Airspace | Creative Agency Bootstrap template</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/mainLayout/img/favicon.png') }}" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/animate-css/animate.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/mainLayout/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body id="body">
<!-- Header Start -->
<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- header Nav Start -->
                <nav class="navbar">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('assets/mainLayout/images/logo.png') }}" alt="Logo" width="280px">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/">Home</a></li>
                                @if(Auth::user())
                                    @if(Auth::user()->role == 'ADMIN')
                                        <li><a href="{{ route('auth.dashboard') }}">ADMIN</a></li>
                                    @endif
                                @endif

                                {{--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Contact Us</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        --}}{{--<li><a href="pricing.html">Pricing Table</a></li>--}}{{--
                                    </ul>
                                </li>--}}
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        @guest
                                            <li><a href="{{ route('login') }}">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endguest
                                        @if(Auth::user())
                                            <li><a>Profile</a></li>
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        @endif
                                    </ul>
                                </li>

                                <li>@livewire("cart-status")</li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header><!-- header close -->

@yield('content')

<!-- footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-manu">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <p class="copyright">Copyright 2018 &copy; Design & Developed by <a href="http://www.themefisher.com">themefisher.com</a>. All rights reserved.
                    <br>
                    Get More <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!--
Essential Scripts
=====================================-->

<!-- <script src="js/jquery.counterup.js"></script> -->

<!-- Main jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--<script src="https://code.jquery.com/jquery-git.min.js"></script>-->
<!-- Bootstrap 3.1 -->
<script src="{{ asset('assets/mainLayout/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('assets/mainLayout/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<!--  -->
<script src="{{ asset('assets/mainLayout/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<!-- Mixit Up JS -->
<script src="{{ asset('assets/mainLayout/plugins/mixitup/dist/mixitup.min.js') }}"></script>
<!-- <script src="plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
<script src="{{ asset('assets/mainLayout/plugins/SyoTimer/build/jquery.syotimer.min.js') }}"></script>


<!-- Form Validator -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>



<!-- Google Map -->
<script src="{{ asset('assets/mainLayout/plugins/google-map/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="{{ asset('assets/mainLayout/js/script.js') }}"></script>






</body>
</html>
