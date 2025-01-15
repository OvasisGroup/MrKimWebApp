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
    <h2>Address Information</h2>
    <form action="{{ route('post.step.two') }}" method="POST" class="foma">
        @csrf
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ old('address', $data['address'] ?? '') }}">
            @error('address') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="{{ old('city', $data['city'] ?? '') }}">
            @error('city') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="button-google">Next</button>
    </form>
</div>
</section>
@endsection
