@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <section class="bodaheader" style="background-image: url({{ asset($category->header_image_url) }}); background-size: cover; background-position: center top; background-repeat: no-repeat; height: 250px; width: 100%; margin-bottom: 3rem; margin-top: 3rem;">
    </section>
    <div class="goback"><a href="{{ route('category') }}"><div class="gobackto"><p>GO BACK</p></div></a></div>
    
    <div class="maincatserach">
        <div class="category-left">
            <h1>{{ $category->name }}</h1>
            <a href="{{ route('category') }}">
                <p> Go Back</p>
            </a>
        </div>
        <div class="category-below">
            <p>Looking for Open Job Opportunities? <span><a href=""> Find Jobs </a> </span></p>
        </div>
        <div class="divi">
            <form class='heroinput' method="get" action="">
                <input type="text" placeholder='Search by Category' name="query" value=""/>
                <button >Search</i></button>
            </form>
        </div>
    </div>
    
    <section class="jobs_list">
        <!-- Show subcategories -->
        @if ($category->children->isNotEmpty())
            <ul>
                @foreach ($category->children as $subcategory)
                    <li>
                        <a href="{{ route('categories.show', $subcategory) }}">
                            {{ $subcategory->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
       
    
    
    </section>


    


@endsection
