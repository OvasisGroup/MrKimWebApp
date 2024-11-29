<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropmenu.css') }}">


    <!--  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkUvz3qraijcMEt8DrjrQmk4d5Dc_X1nU&libraries=places"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!--  -->
</head>
<body>
<header id="nav-menu" aria-label="navigation bar">
      <div class="container">
        <div class="nav-start">
          <a class="logo" href="/">
            <img
              src="{{ asset('images/mrkim-logo.svg') }}"
              width="160px" 
              alt="mr. kim logo"
            />
          </a>
          <nav class="menu">
            <ul class="menu-bar">
              <div class="plus">
                <a href="/categories">Get Service <img src="{{ asset('images/plus2.svg') }}" width="10px" alt="Plus" priority class="imageplus" /></a>
               </div>
              <li><a class="nav-link" href="/">Home</a></li>
              <li><a class="nav-link" href="/">Jobs</a></li>
              <li><a class="nav-link" href="/">Categories</a></li>
              <li><a class="nav-link" href="/">Talent</a></li>
              <li><a class="nav-link" href="/">Premium</a></li>
            </ul>
            <ul class="dropdown">
              dropdown
              <li><a class="nav-link" href="/">Home</a></li>
                <li><a class="nav-link" href="/">Jobs</a></li>
                <li><a class="nav-link" href="/">Categories</a></li>
                <li><a class="nav-link" href="/">Talent</a></li>
                <li><a class="nav-link" href="/">Premium</a></li>
            </ul>
          </nav>
        </div>
        <div class="nav-end">
          <div class="right-container">
            <form class='search' method="get" action="{% url 'search_results' %}">
              <input type="text" placeholder='Search by Category' name="query" value=""/>
              <button ><i class="bx bx-search" aria-hidden="true"></i></button>
          </form>

            
            <button class="btn-login" type="submit"><a href="{{ route('login') }}">Get Started</a></button>
          </div>

          <button
            id="hamburger"
            aria-label="hamburger"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bx bx-menu" aria-hidden="true"></i>
          </button>
          
        </div>
      </div>
    </header>
