@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class='premium' style={imgStyle}></div>
            <section class='who'>

                <div class='header-who-two'>
                    <h1 class='whowearehone'>Our Core Values</h1>
                    <div class='dividers-two'>
                    @foreach ($values as $leg)
                        <div><img src="{{ asset($leg->image) }}"  alt="Plus" priority class="imgplus" /><h3>{{ $leg->title }}</h3> <p class="strips">{{ strip_tags($leg->body) }}</p></div>
                    @endforeach
                    </div>
                </div>

            </section>

@endsection