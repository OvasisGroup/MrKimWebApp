@extends('layouts.app')

@section('title', 'Home')

@section('content')



<div class="aboutimage">
    <img src="{{ asset('images/howitworks.jpeg') }}" width="100%" style="margin-top: 60px;"/>
</div>
<section class="who">
  <div class="header-who-two">
    <h1 class="whowearehone">What Does It Mean To Choose Mr.KIM</h1>
    <p class   ="intocsr">
      By choosing Mr.KIM, it means no more guesswork and tediously scrolling
      through websites and APP reviews and making cold phone calls. Below are
      the reasons why you should choose Mr.KIM for your next project.
    </p>
    <div class="dividers-two-three">
      

    @foreach ($whyus as $lege)
            <div class="donge">

            <img src="{{ asset($lege->image) }}" alt="" width="80" />
            <h3>{{ $lege->title}}</h3>
            <p class="cat-text">{{ strip_tags($lege->body) }}</p>
            </div>
            @endforeach

           
        
      
  </div>
</section>


@endsection