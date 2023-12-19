<html lang="zxx" class="theme-light"><head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/iconplugins.css')}}">

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
            <a href="{{ route('register') }}" class="default-btn two border-radius-5">Enroll Now</a>
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
            <form class="search-form">
            <input type="search" class="form-control" placeholder="Search courses">
            <button type="submit">
            <i class="ri-search-line"></i>
            </button>
            </form>
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

    {{ $slot }}

    <div class="newsletter-area section-bg ptb-100">
        <div class="container">
        <div class="row">
        <div class="col-lg-5">
        <div class="section-title mt-rs-20">
        <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
        <h2>Subscribe our newsletter</h2>
        </div>
        </div>
        <div class="col-lg-7">
        <form class="newsletter-form" data-toggle="validator" method="POST">
        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
        <button class="subscribe-btn" type="submit">
        Subscribe Now <i class="flaticon-paper-plane"></i>
        </button>
        <div id="validator-newsletter" class="form-result"></div>
        </form>
        </div>
        </div>
        </div>
        </div>

    <footer class="footer-area">
        <div class="container pt-100 pb-70">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
        <div class="footer-logo">
        <a href="index.html">
        <img src="{{ asset('assets/images/logo-2.png')}}" alt="Images">
        </a>
        </div>
        <p>
        Lorem ipsum dolor sit amet, consec tetur
        adipiscing elit eiusmod tempor incididunt
        labore dolore magna aliqua consec tetur
        adipiscing elite sed do labor.
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
        <a href="signup.html">
        Instructor registration
        </a>
        </li>
        <li>
        <a href="instructors.html">
        Instructors
        </a>
        </li>
        <li>
        <a href="event.html">
        Our Event
        </a>
        </li>
        <li>
        <a href="courses-list.html">
        Courses List
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
        <a href="blog.html">
        Our Blog
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
        <span>2976 Sunrise Road Las Vegas</span>
        </div>
        </li>
        <li>
        <i class="ri-mail-fill"></i>
        <div class="content">
        <h4>Email:</h4>
        <span><a href="mailto:hello@ledu.com">hello@ledu.com</a></span>
        </div>
        </li>
        <li>
        <i class="ri-phone-fill"></i>
        <div class="content">
        <h4>Phone:</h4>
        <span><a href="tel:098765432150">098765432150</a></span>
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
        Copyright @<script>document.write(new Date().getFullYear())</script>2023 <b>Ledu</b> All Rights Reserved
        <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
        </p>
        </div>
        </div>
        </div>
        </footer>




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
