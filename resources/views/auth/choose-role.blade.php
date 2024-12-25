@extends('auth/layouts.app')

@section('title', 'Register | Roles')

@section('content')

<body class="choose-role">
    <div class="main-role">
        <h1 class="">Join as an Employer or Job Seeker</h1>
        <div class="employer">
            <!-- Employer Role -->
            <a href="{{ route('register', ['role' => 'employer']) }}" class="employer-link">
            <div>
                <img src="{{ asset('images/career.png') }}" width="40px" alt="employer-img" />
            
                <p>Register as Employer</p>
            </div>
        </a>
            <!-- Jobseeker Role -->
            <a href="{{ route('register', ['role' => 'jobseeker']) }}" class="employer-link">
            <div>
                <img src="{{ asset('images/opportunity.png') }}" width="40px" alt="employer-img" />
                <p>Register as Jobseeker</p>
            </div>
        </a>
        </div>
    </div>

@endsection