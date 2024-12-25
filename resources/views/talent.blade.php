@extends('layouts.app')

@section('title', 'Talent')

@section('content')


<div class="searchead"></div>
<section class='catgeories'>
    <div class="category-content">
        <div class="category-below">
            <p>Looking for Open Job Opportunities? <span><a href="/jobs">View Jobs </></span></p>
        </div>
    </div>

        <div class="divi">
            <form class='heroinput' method="get" action="">
                {% csrf_token %}
                <input type="text" placeholder='Search by Category' name="query" value="" />
                <button>Search</i></button>
            </form>
        </div>



    <div class="category-left">
        <h1>Search Results</h1>

    </div>

    <div class="category-typesone">
       
    </div>


</section>

</section>
</div>

@endsection