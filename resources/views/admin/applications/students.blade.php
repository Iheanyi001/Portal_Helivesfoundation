@extends('layouts.frontend')


@section('content')

<div class="inner-banner inner-banner-bg2">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Student Interest Form</h3>
            <ul>
            <li>
            <a href="index.html">Home</a>
            </li>
            <li>Interest Form</li>
            </ul>
        </div>
    </div>
</div>


<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-10">
            <div class="user-all-form">


            @livewire('applications.students')



            </div>
            </div>
        </div>
    </div>
</div>


@endsection
