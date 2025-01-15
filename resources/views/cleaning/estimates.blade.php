@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')

    <section>
        <img src="{{ asset('images/wuoyi.jpg') }}" width="100%", height="150px"
            style="object-fit: cover; border-radius: 10px;">
    </section>
    <section class="imagesa">
        <div class="lwet"><img src="{{ asset('images/SVG/handwash.svg') }}" width="50px"></div>
    </section>
    <section class="section-contact">
        <div class="ppp">
            <h3 class="ppph">Our Commitment to You</h3>
            <p class="pppp">Mr. Kim is here to help you with your project. We are a team of professional service providers
                who are here to help you with your project. We will help you get the right professional service provider for
                your project and we will also help you schedule your project.</p>
            <a href="{{ route('post.step.one') }}"><button class="button-contact">Request an Estimate</button></a>
        </div>
    </section>

    <section class="amalga">
        <div class="comitment">
            @foreach ($commit as $post)
                <div class="post">
                    @if ($post->image)
                        <img src="{{ asset($post->image) }}" alt="Image for {{ $post->title }}"
                            style="max-width: 80px; height: auto;">
                    @endif
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection
