
@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')
<section class="section-hero-step-one">
    {{-- <img src="{{ asset('images/bench-cleaning.jpg') }}" width="100%" height="100px" style="object-fit: cover;"/> --}}
</section>

<section class="imagesa">
<div class="lwet"><img src="{{ asset('images/SVG/handwash.svg') }}" ></div>
</section>

<section class="section-contact">
<div>
    <h2>Step 3: Review and Submit</h2>
    <form action="{{ route('post.step.three') }}" method="POST">
        @csrf
        <button type="submit" class="button-google">Submit</button>
    </form>
</div>
</section>
@endsection
