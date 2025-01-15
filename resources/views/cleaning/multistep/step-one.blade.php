@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')

<section class="section-hero-step-one">
    {{-- <img src="{{ asset('images/bench-cleaning.jpg') }}" width="100%" height="100px" style="object-fit: cover;"/> --}}
</section>

<section class="section-contact">
<div>
    <h2>Personal Information</h2>
    <form action="{{ route('post.step.one') }}" method="POST" class="foma">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name"  value="{{ old('name', $data['name'] ?? '') }}">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email"  value="{{ old('email', $data['email'] ?? '') }}">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="block">Estate/Apartment Name</label>
            <input type="text" id="estate" name="block"  value="{{ old('estate', $data['estate'] ?? '') }}">
            @error('block') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="block">Block/House No.</label>
            <input type="text" id="block" name="block" value="{{ old('block', $data['block'] ?? '') }}">
            @error('block') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="location">Location</label>
            <input type="text" id="location-input" value="{{ old('location', $data['location'] ?? '') }}">
            @error('location') <span>{{ $message }}</span> @enderror
            <br>
            <p id="details"></p>
            <div id="map"></div>
           
        </div>
        <button type="submit" class="button-google">Next</button>
    </form>
</div>
</section>

@endsection
