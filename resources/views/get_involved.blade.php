@extends('layouts.frontend')


@section('content')
<div class="inner-banner inner-banner-bg2">
    <div class="container">
        <div class="inner-title text-center">
        <h3>Get Involved</h3>
        <ul>
        <li>
        <a href="{{ route('home') }}">Home</a>
        </li>
        <li>Get Involved</li>
        </ul>
        </div>
    </div>
</div>

<div class="event-area pt-100 pb-100">
    <div class="container my-container">
    <div class="section-title mb-45">
    <h2>JOIN THE HE LIVES DEVELOPMENT AND EMPOWERMENT FOUNDATION FAMILY!</h2>
    </div>
    <div class="row">



    <div class="col-lg-12">
    <div class="event-item box-shadow">
    <div class="event-img">
    <a href="event-details.html">
    <img src="{{ asset('assets/images/get_involved/partners.png')}}" alt="Events">
    </a>
    </div>
    <div class="event-content">
    <h3><a href="event-details.html">Partners</a></h3>
    <p>If you would like to support our mission as a funder, advisor, mentor, collaborator, or in another capacity, take a look at our <a href="{{ route('sponsors_apply') }}">sponsors page</a> or email (contact@helives.com) to ask about our current needs. We greatly appreciate our partners--you play a critical role in making this work possible!</p>
    </div>
    </div>
    </div>


    <div class="col-lg-12">
    <div class="event-item box-shadow">
    <div class="event-img">
    <a href="event-details.html">
    <img src="{{ asset('assets/images/get_involved/students.png')}}" alt="Events">
    </a>
    </div>
    <div class="event-content">

    <h3><a href="event-details.html">Students</a></h3>
    <p>Students. The HE LIVES DEVELOPMENT AND EMPOWERMENT FOUNDATION is always looking for motivated students who care deeply about society and are also passionate about technology. If that describes you, read the below, fill out the <a href="{{ route('students_apply') }}">interest form!</a></p>
    </div>
    </div>
    </div>


    </div>
    </div>
    </div>


    <div class="courses-area pb-70">
        <div class="container my-container">
        <div class="section-title mb-45">
        <h2>I am a student looking to...</h2>
        <p>
            To ensure a good fit for everyone, we kindly ask you to read the following information thoroughly before filling out the <a href="{{ route('students_apply') }}">interest form</a>.
        </p>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6">
        <div class="courses-item" style="height:330px">

        <div class="content">

        <h3><a href="courses-details.html">Residence</a></h3>
        <p>
            We warmly invite all eligible students with a permanent residence in Mbaise Imo State, Nigeria or a nearby town. We're excited about expanding our reach very soon, so stay tuned, keep your fingers crossed, and continue to support us with your prayers and well wishes
        </p>

        </div>
        </div>
        </div>




        <div class="col-lg-4 col-md-6">
            <div class="courses-item" style="height:330px">

                <div class="content">

                <h3><a href="courses-details.html">Dedication</a></h3>
                <p>
                    You must show a strong commitment to studies and academic success involves consistent high performance, active participation in both class and extracurriculars, and maintaining positive study habits and readiness to dedicate 4-6 hours daily to studying.
                </p>

                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="courses-item" style="height:330px">

                <div class="content">

                <h3><a href="courses-details.html">God-fearing</a></h3>
                <p>

Exhibiting a strong moral compass aligned with Christian values is paramount. This is exemplified through various actions, such as regular attendance at morning devotions before classes, active engagement in church activities, and consistently demonstrating ethical behavior while showing respect for others.</p>

                </div>
            </div>
        </div>


        </div>
        </div>
        </div>
@endsection

