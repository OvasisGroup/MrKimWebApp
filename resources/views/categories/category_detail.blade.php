@extends('layouts.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <h1>{{ $category->name }}</h1>

        <!-- Display category image -->
        <div>
            <img src="{{ $category->image_url }}" alt="{{ $category->name }}" style="width: 200px;">
        </div>

        <!-- Display header image if available -->
        @if ($category->header_image_url)
            <div>
                <img src="{{ $category->header_image_url }}" alt="Header for {{ $category->name }}"
                    style="width: 100%; max-height: 300px; object-fit: cover;">
            </div>
        @endif

        <!-- Category description -->
        <p>{{ $category->description }}</p>

        <!-- Show subcategories -->
        @if ($category->children->isNotEmpty())
            <h2>Subcategories</h2>
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
    </div>


@endsection
