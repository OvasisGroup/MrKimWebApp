
@extends('layouts.app')

@section('title', 'Get App')

@section('content')
<div>
    <div class='premium' style={imageStyle}></div>
    <div class='three-leg'>
    <img src="{{ asset('images/mrkim-logo-three.png') }}" width="150px" alt="Plus" priority class="imageplus" />
    </div>


    <section class='three-four'>
      <div class='adek-angwend'>
      <img src="{{ asset('images/proinarea.jpg') }}" width="350px"alt="Plus" priority class="imageplus" />
      </div>
      <div class='adek-angwen'>
        <h1> Find  a local Professional Service Provider in Your Area</h1>
        <p>Have a quick and convenient access to any service needs for your project.</p>
        <p>Be confident in Mr. KIM network of professional service providers.</p>
        <p>No job too small or too big. You Name it! We do it!</p>
      </div>
    </section>

    <section class='three-fours'>
      <div class='adek-angwen'>
        <h1>Schedule  & Save </h1>
        <p>Schedule an appointment</p>
        <p>Track Job progress ( Not available in all areas)</p>
        <p>Professional service provider assigned.</p>
        <p>Professional Service provider has arrived.</p>
        <p>Job completed. </p>
      </div>
      <div class='adek-angwend'>
      <img src="{{ asset('images/schedule-01.png') }}" width={450} height={450} alt="Plus" priority class="imageplus" />
      </div>
    </section>
</div>

@endsection