@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class='premium'></div>
            <section class='who'>
                <div class='header-who'>
                
                @foreach ($whoweare as $leg)
                        <div class='whowearehone'><h2>{{ $leg->title}}</h2>
                            <p class="mission-who">{{ strip_tags($leg->body) }}</p>
                        </div>
                @endforeach

                @foreach ($mission as $lege)
                <div class='whowearehone'><h2>{{ $lege->title}}</h2>
                            <p class="mission-who">{{ strip_tags($lege->body) }}</p>
                        </div>
                 @endforeach
              
                </div>
                <div class='header-who-two'>
                    <h1 class='whowearehoneh1'>What Sets Us Apart</h1>
                    <div class='dividers-two'>
                    @foreach ($what as $lege)
                        <div>
                            <img src="{{ asset($lege->image) }}" width=60px  alt=""  class="imgplus" />
                            <h3>{{ $lege->title}}</h3>
                            <p class="strips">{{ strip_tags($lege->body) }}</p>
                        </div>
                    @endforeach
                        
                    </div>
                </div>
                <div class='header-who-three'>

                @foreach ($expertise as $lege)
                    <h1 class='whowearehoneh1'>{{ $lege->title}}</h1>
                    <p class="strips">{{ strip_tags($lege->body) }}</p>
                @endforeach
                </div>
            </section>
    
            @endsection