@extends('layouts.frontend')

@section('content')

<div class="banner-area banner-area-ptb">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="banner-content">
    <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">HE LIVES DEVELOPMENT AND EMPOWERMENT FOUNDATION</span>
    <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Empowering Youths through ICT</h1>
    <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Nigeria faces an urgent challenge: 120 million young people are on the verge of adulthood. However, a staggering 60% of these youths in the country are projected to lack essential skills by 2030. This places their chances for dignified lives at risk, with far-reaching impacts on Nigeria's economy, communities, and society. This crisis threatens to deepen inequality and bar young Nigerians from the opportunities crucial for a better life.</p>
    <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
    <a class="default-btn" type="submit" href="{{ route('get_involved') }}">
     Get Involved
    </a>

    </div>
    <div class="row">



    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="banner-img-two" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
    <img src="assets/images/home-two/home-two.jpg" alt="Man" />
    <div class="bg-shape">
    <img src="assets/images/home-two/home-shape.png" alt="Shape" />
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="featured-area featured-area-mt pb-70">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-4 col-6">
    <div class="featured-item">
    <i class="flaticon-studying"></i>
    <h3>Our Mission</h3>
    <p>Empowering youths through ICT education, mentorship, and practical skill development to foster sustainable opportunities and growth within their communities.</p>
    </div>
    </div>
    <div class="col-lg-4 col-6">
    <div class="featured-item">
    <i class="flaticon-platform"></i>
    <h3>Our Goal</h3>
    <p>foster skills through training, empower through job readiness, build a supportive community for ongoing learning, and measure success via job placements and community engagement.</p>
    </div>
    </div>
    <div class="col-lg-4 col-6">
    <div class="featured-item">
    <i class="flaticon-effective"></i>
    <h3>Our Vision</h3>
    <p>To create a world where every young individual, regardless of background, has the opportunity to thrive in the digital age through ICT empowerment.</p>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="featured-area pt-100 pb-70">
    <div class="container">
    <div class="row align-items-center mb-45">
    <div class="col-lg-8 col-md-9">
    <div class="section-title mt-rs-20">
    <h2>Explore our programs</h2>
    <p>Our programs are tailored to equip the young individuals in our community, regardless of gender, with digital skills that empower them to enhance their community, transform their own lives, and positively impact the lives of their loved ones.</p>
    </div>
    </div>
    <div class="col-lg-4 col-md-3 text-end">
    <!-- removed enroll button-->
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-3 col-6 col-md-4">
    <div class="featured-card">
    <a href="courses.html">
    <i class="flaticon-web-development"></i>
    <h3>Mobile App Development</h3>
    </a>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-4">
    <div class="featured-card">
    <a href="courses.html">
    <i class="flaticon-design"></i>
    <h3>Web Development</h3>
    </a>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-4">
    <div class="featured-card">
    <a href="courses.html">
    <i class="flaticon-camera"></i>
    <h3>Digital Marketing</h3>
    </a>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-4">
    <div class="featured-card">
    <a href="courses.html">
    <i class="flaticon-folder"></i>
    <h3>CyberSecurity</h3>
    </a>
    </div>
    </div>




    </div>
    </div>
    </div>


    <div class="courses-area pb-70">
    <div class="container">
    <div class="section-title text-center mb-45">
    <h2>Our Priorities</h2>
    <p>
        The following aspects hold utmost significance for us as our program aims to profoundly alter the lives of these youths inside and out.
    </p>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-6">
    <div class="courses-item">
    <a href="courses-details.html">
    <img src="{{ asset('assets/images/connectivity.jpg')}}" alt="Courses">
    </a>
    <div class="content">

    <h3><a href="courses-details.html">
        Connectivity
    </a></h3>
    <p>

  Supporting young people's equitable access to the digital sphere and all the opportunities that it offers.
    </p>

    </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="courses-item">
        <a href="courses-details.html">
        <img src="{{ asset('assets/images/enterprenuship.jpg')}}" alt="Courses">
        </a>
        <div class="content">

        <h3><a href="courses-details.html">
            Entrepreneurship
        </a></h3>
        <p>
            Boosting entrepreneurial skills and opportunities for young people
        </p>

        </div>
        </div>
        </div>


        <div class="col-lg-3 col-md-6">
            <div class="courses-item">
            <a href="courses-details.html">
            <img src="{{ asset('assets/images/employment.jpg')}}" alt="Courses">
            </a>
            <div class="content">

            <h3><a href="courses-details.html">

                Employment
            </a></h3>
            <p>
                Ramping up access to world-class digital skilling solutions & livelihood opportunities
            </p>

            </div>
            </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="courses-item">
                <a href="courses-details.html">
                <img src="{{ asset('assets/images/social_impact.jpg')}}" alt="Courses">
                </a>
                <div class="content">

                <h3><a href="courses-details.html">

                    Social Impact
                </a></h3>
                <p>
                    Supporting young people as change-makers and co-creators of solutions</p>
                </div>
                </div>
                </div>


    </div>



    </div>
    </div>




    <div class="instructors-area pb-70">
    <div class="container">
    <div class="row align-items-center mb-45">
    <div class="col-lg-8 col-md-9">
    <div class="section-title mt-rs-20">
    <h2>Meet our Facilitators.</h2>
    <p>Get acquainted with the individuals steering this program, committed to transforming the lives of youths, beginning with Mbaise in Imo state.</p>
    </div>
    </div>
    <div class="col-lg-4 col-md-3 text-end">
    <a href="/facilitators" class="default-btn">View all Facilitators</a>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-3 col-md-6">
    <div class="instructors-item">
    <div class="instructors-img">
    <a href="instructors-details.html">
    <img src="{{ asset('assets/images/facilitators/fac1.jpg')}}" alt="Team Images">
    </a>
    <ul class="instructors-social">
    <li>
    <a href="https://www.facebook.com/" target="_blank">
    <i class="ri-facebook-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.instagram.com/" target="_blank">
    <i class="ri-instagram-line"></i>
    </a>
    </li>
    <li>
    <a href="https://twitter.com/" target="_blank">
    <i class="ri-twitter-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.linkedin.com/" target="_blank">
    <i class="ri-linkedin-box-line"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="content">
    <h3><a href="instructors-details.html">Mr. Victor James</a></h3>
    <span>Leader</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="instructors-item">
    <div class="instructors-img">
    <a href="instructors-details.html">
    <img src="{{ asset('assets/images/facilitators/fac2.jpg')}}" alt="Team Images">
    </a>
    <ul class="instructors-social">
    <li>
    <a href="https://www.facebook.com/" target="_blank">
    <i class="ri-facebook-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.instagram.com/" target="_blank">
    <i class="ri-instagram-line"></i>
    </a>
    </li>
    <li>
    <a href="https://twitter.com/" target="_blank">
    <i class="ri-twitter-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.linkedin.com/" target="_blank">
    <i class="ri-linkedin-box-line"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="content">
    <h3><a href="instructors-details.html">John Okoro</a></h3>
    <span>Leader</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="instructors-item">
    <div class="instructors-img">
    <a href="instructors-details.html">
    <img src="{{ asset('assets/images/facilitators/fac3.jpg')}}" alt="Team Images">
    </a>
    <ul class="instructors-social">
    <li>
    <a href="https://www.facebook.com/" target="_blank">
    <i class="ri-facebook-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.instagram.com/" target="_blank">
    <i class="ri-instagram-line"></i>
    </a>
    </li>
    <li>
    <a href="https://twitter.com/" target="_blank">
    <i class="ri-twitter-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.linkedin.com/" target="_blank">
    <i class="ri-linkedin-box-line"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="content">
    <h3><a href="instructors-details.html">Engr Buchi</a></h3>
    <span>Mobile App Developer</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="instructors-item">
    <div class="instructors-img">
    <a href="instructors-details.html">
    <img src="{{ asset('assets/images/facilitators/fac4.jpg')}}" alt="Team Images">
    </a>
    <ul class="instructors-social">
    <li>
    <a href="https://www.facebook.com/" target="_blank">
    <i class="ri-facebook-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.instagram.com/" target="_blank">
    <i class="ri-instagram-line"></i>
    </a>
    </li>
    <li>
    <a href="https://twitter.com/" target="_blank">
    <i class="ri-twitter-fill"></i>
    </a>
    </li>
    <li>
    <a href="https://www.linkedin.com/" target="_blank">
    <i class="ri-linkedin-box-line"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="content">
    <h3><a href="instructors-details.html">Mr. Victory Chinedum</a></h3>
    <span>Organizer</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>




    <div class="enrolled-area">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="enrolled-content">
    <div class="section-title">
    <h2>Bridging the Gap to Youth Employment: Empowering Our Community with ICT Skills</h2>
    <p>Recognizing the challenge of youth unemployment within our community, we've embarked on a transformative initiative: equipping young people with the essential ICT skills and knowledge they need to thrive in the modern workforce
        <br/>
        To make this vision a reality, we've established a dedicated learning space:

    </p>
    </div>
    <div class="row">
    <div class="col-lg-6 col-6">
    <ul class="enrolled-list">
    <li><i class="flaticon-check"></i> Equipped with laptops</li>
    <li><i class="flaticon-check"></i> Powered by reliable internet</li>
    </ul>
    </div>
    <div class="col-lg-6 col-6">
    <ul class="enrolled-list">
    <li><i class="flaticon-check"></i> Bathed in consistent lighting</li>
    <li><i class="flaticon-check"></i> Designed for comfort and engagement</li>
    </ul>
    </div>
    </div>
    <a href="courses.html" class="default-btn">Get Involved</a>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="enrolled-img" data-speed="0.05" data-revert="true">
    <img src="{{ asset('assets/images/enrolled-img.png')}}" alt="Enrolled">
    <div class="bg-shape">
    <img src="{{ asset('assets/images/enrolled-shape.png')}}" alt="Shape">
    </div>
    <div class="top-content">
    <div class="enrolled-img-content">
    <i class="flaticon-mail-inbox-app"></i>
    <div class="content">
    <h3>Inbox</h3>
    <p>Work with us!</p>
    </div>
    </div>
    </div>
    <div class="right-content">
    <div class="enrolled-img-content">
    <i class="flaticon-discount"></i>
    <div class="content">
    <h3>Free For</h3>
    <p>Every course</p>
    </div>
    </div>
    </div>
    <div class="left-content">
    <div class="enrolled-img-content">
    <i class="flaticon-reading-book active"></i>
    <div class="content">
    <h3>32+ students</h3>
    <p>Learn daily</p>
    </div>
    </div>
    </div>
    <div class="enrolled-img-shape">
    <div class="shape1">
    <img src="assets/images/enrolled-shape2.png" alt="Shape">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="blog-area pt-100 pb-70">
    <div class="container">
    <div class="row align-items-center mb-45">
    <div class="col-lg-8 col-md-9">
    <div class="section-title mt-rs-20">
    <h2>
        Meet the amazing instructor volunteers who are empowering our youth through ICT skills!</h2>
    <p>
        These dedicated individuals are sharing their expertise and passion to bridge the gap in youth employment and create a brighter future for our community.
    </p>
    </div>
    </div>
    <div class="col-lg-4 col-md-3 text-end">
    <!--view all logs-->
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6">
    <div class="blog-card">
    <a href="single-blog-1.html">
    <img src="{{  asset('assets/images/instructors/instructor1.jpeg')}}" alt="Blog">
    </a>
    <div class="content">

    <h3><a href="single-blog-1.html">Engr. Uko Iheanyi</a></h3>
    <p>Meet Uko Iheanyi: Full Stack Developer and Cybersecurity Expert at Rechargeboss!</p>

    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="blog-card">
    <a href="single-blog-1.html">
    <img src="{{  asset('assets/images/instructors/instructor2.jpg')}}" alt="Blog">
    </a>
    <div class="content">

    <h3><a href="single-blog-1.html">Pastor, Engr. Buchi</a></h3>
    <p>Meet Pastor Buchi: Inspiring Mobile App Developers at Provailing Computers!</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="blog-card">
    <a href="single-blog-1.html">
    <img src="{{  asset('assets/images/instructors/more_instructors.avif')}}" alt="Blog">
    </a>
    <div class="content">

    <h3><a href="single-blog-1.html">
        Seeking enthusiastic volunteer instructors to join us and make a difference.
    </a></h3>

    <a href="single-blog-1.html" class="read-btn">Contact Us</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="footer-contact-area ptb-100">
    <div class="container">
    <div class="row">
    <div class="col-lg-9 col-md-9">
    <div class="section-title">
    <h2>Don't Be Left Behind: Join Us to Secure a Brighter Future for Unemployed Youths!</h2>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 text-end">
    <a href="{{ route('get_involved') }}" class="default-btn">Get Involved</a>
    </div>
    </div>
    </div>
    </div>

@endsection


