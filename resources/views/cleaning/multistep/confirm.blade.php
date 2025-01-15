@extends('cleaning.layouts.app')

@section('title', 'Step 3')

@section('content')
<section class="section-hero-step-one">
    {{-- <img src="{{ asset('images/bench-cleaning.jpg') }}" margin-top="100px" width="100%" height="100px" style="object-fit: cover;"/> --}}
</section>

<section class="section-contact">

<div class="eria">
    <h2>Confirm Your Information</h2>
    <form action="{{ route('submit') }}" method="POST" class="foma">
        @csrf

        <h3>Please Confirm</h3>
        <strong>Name:</strong> {{ $stepOneData['name'] ?? 'N/A' }}
        <hr>
        <strong>Email:</strong> {{ $stepOneData['email'] ?? 'N/A' }}<hr/>
        <strong>Block:</strong> {{ $stepOneData['block'] ?? 'N/A' }}<hr/>
        <strong>Location:</strong> {{ $stepOneData['location'] ?? 'N/A' }}<hr/>
        <strong>Address:</strong> {{ $stepTwoData['address'] ?? 'N/A' }}<hr/>
        <strong>City:</strong> {{ $stepTwoData['city'] ?? 'N/A' }}<hr/>

        <div>
            <button type="submit" class="button-google">Submit</button>
            <a href="{{ route('step.one') }}">Edit</a>
        </div>
    </form>
</div>
</section>
@endsection
