@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="lawimages"></section>  
<div>
    <div class="category-section">
          <div class="category-content" data-aos="fade-up">
              <div class="category-left">
                <h1>Our Legal Terms</h1>
              </div>
              <div class="category-below">
                  <p>Effective: January, 2023</p>
              </div>
          </div>
    </div>
    <div class="legaltabs">
        <div class="cardi">
            @foreach ($legallist as $leg)
            <a href="">
            <div class="cada">
                <div class="cadas">
                    <img src="{{ asset('images/services.png') }}"alt="legal" width="50px" class="stax"/>
                    <h4>{{ $leg->title}}</h4>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>


@endsection



