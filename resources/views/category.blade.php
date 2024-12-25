@extends('layouts.app')

@section('title', 'Home')

@section('content')



<section class="jobs_list_header">

</section>

<div class="maincatserach"><div class="category-left"><h1>All Categories</h1></div><div class="category-below"><p>Looking for Open Job Opportunities? <span>Find Jobs </span></p></div>
<div class="divi">
    <form class='heroinput' method="get" action="">
        <input type="text" placeholder='Search by Category' name="query" value=""/>
        <button >Search</i></button>
    </form>
</div>
</div>

<section class="jobs_list">
    <div class="jobs_cards">
        <!-- {% for category in categories %} -->
        @foreach ($values as $lege)
            <div class="cadi">
                <a href="">
                <div style="background-image: url({{ asset($lege->image) }}); background-size: cover; background-position: center; height: 250px; border-radius: .5rem;" class=""></div>
                <div class="rowa">
                    <h3>{{ $lege->name }}</h3>   
                <a href=""><button>View Details</button></a>
                </div>
            </a>
            </div>
        <!-- {% endfor %} -->
        @endforeach


       
     
                


        <div class="cadi">
        <div style="background-image: url({{ asset('images/cleaner.jpg')}}); background-size: cover; background-position: center; height: 250px; border-radius: .5rem;" class=""></div>
        <div class="rowa">
                    <h3>Cleaning Services</h3>
                <a href="{{ route('cleaning.index') }}"><button>View Services</button></a>
                </div>
    </div>
</section>


@endsection
