<html lang="zxx" class="theme-light"><head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/iconplugins.css')}}">
    @livewireStyles

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css')}}">

    <title>He Lives &amp; Development and Empowerment Foundation</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png')}}">
    </head>
    <body>

            <div id="preloader">
            <div id="preloader-area">
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            </div>
            <div class="preloader-section preloader-left"></div>
            <div class="preloader-section preloader-right"></div>
            </div>


            <div class="navbar-area">
            <div class="mobile-responsive-nav">
            <div class="container">
            <div class="mobile-responsive-menu">
            <div class="logo">
            <a href="index.html">
            <img src="assets/images/logos/logo-small.png" class="logo-one" alt="logo">
            <img src="assets/images/logos/logo-small-white.png" class="logo-two" alt="logo">
            </a>
            </div>
            </div>
            </div>
            </div>

            <div class="desktop-nav nav-area">
            <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
            <a class="navbar-brand" href="index.html">
            <img src="assets/images/logos/logo.png" class="logo-one" alt="Logo">
            <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
            </a>
            <div class="nav-widget-form">
            <form class="search-form search-form-bg2">
            <input type="search" class="form-control" placeholder="Search courses">
            <button type="submit">
            <i class="ri-search-line"></i>
            </button>
            </form>
            </div>
            <div class="navbar-category">
            <div class="dropdown category-list-dropdown">

            </div>
            </div>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a href="#" class="nav-link active">
            Home
            </a>

            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
            About Us
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link dropdown-toggle">
            Courses
            </a>
            <ul class="dropdown-menu">
            <li class="nav-item">
            <a href="courses.html" class="nav-link">
            Cyber Security
            </a>
            </li>
            <li class="nav-item">
            <a href="courses-list.html" class="nav-link">
            Web Development
            </a>
            </li>
            <li class="nav-item">
            <a href="courses-sidebar.html" class="nav-link">
            Digital Marketing
            </a>
            </li>
            <li class="nav-item">
            <a href="courses-details.html" class="nav-link">
            Mobile Application development
            </a>
            </li>
            </ul>
            </li>


            <li class="nav-item">
            <a href="contact.html" class="nav-link">
            Contact Us
            </a>
            </li>
            </ul>
            <div class="others-options d-flex align-items-center">
            <div class="optional-item">
            <a href="{{ route('get_involved') }}" class="default-btn two border-radius-5">Get Involved</a>
            </div>
            </div>
            </div>
            </nav>
            </div>
            </div>
            <div class="side-nav-responsive">
            <div class="container">
            <div class="dot-menu">
            <div class="circle-inner">
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
            <div class="circle circle-three"></div>
            </div>
            </div>
            <div class="container">
            <div class="side-nav-inner">
            <div class="side-nav justify-content-center align-items-center">
            <div class="side-item">

                <!-- replace with name-->
            </div>
            <div class="side-item">
            <a href="{{ route('register') }}" class="default-btn two">Sign Up</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>




    @yield('content')

    <footer class="footer-area">
        <div class="container pt-100 pb-70">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
        <div class="footer-logo">
        <a href="index.html">
        <img src="{{ asset('assets/images/logos/logo-2.png')}}" alt="Images">
        </a>
        </div>
        <p>
            HE LIVES Foundation is not just an organization, it's a movement powered by faith and driven by a passion to make a difference. We invite you to join us in this mission and be a part of building brighter futures for generations to come.
        </p>
        <ul class="social-link">
        <li class="social-title">Follow Us:</li>
        <li>
        <a href="https://www.facebook.com/" target="_blank">
        <i class="ri-facebook-fill"></i>
        </a>
        </li>
        <li>
        <a href="https://twitter.com/" target="_blank">
        <i class="ri-twitter-fill"></i>
        </a>
        </li>
        <li>
        <a href="https://www.pinterest.com/" target="_blank">
        <i class="ri-instagram-line"></i>
        </a>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>About us</h3>
        <ul class="footer-list">
        <li>
        <a href="about.html">
        About Us
        </a>
        </li>

        <li>
            <a href="/facilitators">
            Facilitators
            </a>
        </li>

        <li>
        <a href="instructors.html">
        Instructors
        </a>
        </li>
        <li>
        <a href="{{ route('get_involved') }}">
        Get Involved
        </a>
        </li>

        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>Resources</h3>
        <ul class="footer-list">
        <li>
        <a href="index.html">
        Home
        </a>
        </li>
        <li>
        <a href="courses.html">
        Courses
        </a>
        </li>

        <li>
        <a href="terms-condition.html">
        Terms &amp; conditions
        </a>
        </li>
        <li>
        <a href="privacy-policy.html">
        Privacy Policy
        </a>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>Official Info</h3>
        <ul class="footer-contact">
        <li>
        <i class="ri-map-pin-2-fill"></i>
        <div class="content">
        <h4>Location:</h4>
        <span>29 Mbaise Imo State</span>
        </div>
        </li>
        <li>
        <i class="ri-mail-fill"></i>
        <div class="content">
        <h4>Email:</h4>
        <span><a href="mailto:hello@ledu.com">info@helives.com</a></span>
        </div>
        </li>
        <li>
        <i class="ri-phone-fill"></i>
        <div class="content">
        <h4>Phone:</h4>
        <span><a href="tel:+2347045494834">+2347045494834</a></span>
        <span><a href="tel:+2349065275846">+2349065275846</a></span>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        <div class="copyright-area">
        <div class="container">
        <div class="copy-right-text text-center">
        <p>
        Copyright @<script>document.write(new Date().getFullYear())</script> All Rights Reserved
        <a href="https://iportfolio.vercel.app" target="_blank">UIcodes</a>
        </p>
        </div>
        </div>
        </div>
        </footer>

        @livewireScripts


        <script src="{{  asset('assets/js/jquery.min.js')}}"></script>

        <script src="{{  asset('assets/js/plugins.js')}}"></script><script src="{{  asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/meanmenu.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/ajaxchimp.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/form-validator.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/contact-form-script.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/magnific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/aos.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/odometer.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/appear.min.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/js/tweenMax.min.js')}}" type="text/javascript"></script>

        <script src="{{  asset('assets/js/custom.js')}}"></script><div class="go-top"><i class="ri-arrow-up-s-line"></i></div><div class="switch-box"><label id="switch" class="switch"><input type="checkbox" onchange="toggleTheme()" id="slider"><span class="slider round"></span></label></div>

        </body>
        </html>
