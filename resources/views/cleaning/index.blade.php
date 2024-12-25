@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <video autoplay muted loop>
      <source src="{{ asset('images/cleaning_video.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        <p>Cleaning Services that </p>
      <h1>Sparkle Your Space, <br> Simplify Your Life.</h1>
      
      <button>Get Started With Mr. Kim</button>
    </div>
  </section>

<div>
           


@endsection