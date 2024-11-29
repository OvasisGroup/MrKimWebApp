
@extends('layouts.app')

@section('title', 'Home')

@section('content')



<div class='premium' style={imgStyle}></div>
            <section class='who'>

                <div class='header-who-two'>
                    <h1 class='whowearehone'>Our Corporate Responsibility</h1>
                    <p class='intocsr'>Mr.KIM corporate responsibility to the community encompasses a commitment to ethical, social, and environmental practices that positively impact the local community that we serve. Here are some key elements of Mr.KIM corporate responsibility attributes:</p>
                    <div class='dividers-two-three'>
                    @foreach ($corp as $leg)
                        <div class='donge'>
                            
                            <img src="{{ asset($leg->image) }}" width=80px alt="Plus" priority class="imgplus" />
                            <h3>{{ $leg->title }}</h3>
                            <p>{{ strip_tags($leg->body) }}</p>
                            
                        </div>
                       @endforeach
                    </div>
                </div>

            </section>

            @endsection