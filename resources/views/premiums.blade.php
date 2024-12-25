@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="premiumimage"></section>
<div class="category-section">
    <div class="category-content">
        <div class="category-left">
            <h1>Our Premium Services</h1>
        </div>
        <div class="category-below">
            <div>
                <p>Looking for Open Job Opportunities? <span><a href="/jobs">Find Jobs </a></span></p>
            </div>
            <div>
                <a href="/booking">
                    <h4 class="bookings">Book Now</h4>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="premiumpage">
    <!-- {% for premium in premiums %} -->

    <a href="">
        <div class="carding">
            <img src="" alt="" class="imagepluse" width="50px">
            <h4> name</h4>
        </div>
    </a>
    <!--{% endfor %} -->
</div>
</a>

@endsection