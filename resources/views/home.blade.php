@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero-section" >
            <div class="hero-content">
                <div class="hero-left">
                <div class="location_piece">
                <img src="{{ asset('images/SVG/location.svg') }}" width="20px" alt="location" priority class="location" />
                    <p id="location"></p>
                </div> 
                    <h1 class="hero-title">Get the right local pro in your area for any project.</h1>
                    <div class="heroinput">
                        <form class='heroinput' method="get" action="">
                            <input type="text" placeholder='Search by Category' name="query" value=""/>
                            <button >Search</button>
                        </form>
                    </div>
                </div>
                <div class="hero-rights">
                    <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                      <div class="numbertext"></div>
                      <img src="{{ asset('images/man.png') }}" width="300px">
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext"></div>
                      <img src="{{ asset('images/woman.png') }}" width="300px">
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  <br>
                </div>
            </div>
        </section>

<section class='catgeories'>
            <div class="category-content">
              <div class="category-left">
                  <h1>Get Services</h1>
                  <a href="/categories"><p>See All</p></a>
              </div>
              <div class="category-below">
                  <p>Looking for Open Job Opportunities? <span><a href="/jobs">View Jobs </a></span></p>
              </div>
            </div>
              <div class="category-typesone">
               <!-- Set up your HTML -->
               <div  class="sliderkings slick-slider">
               @foreach ($values as $lege)
                <a href="">
                <div style="background-image: url({{ asset($lege->image) }}); background-size: cover; background-position: center; height: 200px; display: flex; gap: 1rem; margin: .5rem;" class="category_list">
                  <div class="single_list">{{ $lege->name }}</div>
                </div>
               </a>
                @endforeach
              </div>
          </div>
        </section>


        <section class="catgeories">
          <div class="cleaning-bg">
            <div class="leftwing">
              <div>
              <img src="{{ asset('images/SVG/handwash.svg') }}" width="60px">
              <h1>Get Cleaning Services from our Trusted Team at the the MOST favorable Rates</h1>
              <a href=""><p>Get Quotation</p></a>
</div>
            </div>
            <div class="rightwing"></div>
          </div>
        </section>


         <section class='catgeories'>
          <div class="category-content">
            <div class="category-left">
                <h1>Jobs</h1>
                <a href="/jobs"><p>See All</p></a>
            </div>
            <div class="category-below">
                <p>Looking for Open Job Opportunities? <span><a href="/jobs">View Jobs </a></span></p>
            </div>
          </div>
            <div class="category-typesone">
             <!-- Set up your HTML -->
             <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="jobs">
              <div class="job">
                <div>
                  <h3></h3>
                  <p></p>
                </div>
                <div class="">
                <h4>Amount:</h4>
                <p>KES.</p>
                </div>
                <ul>
                  <li></li>
                </ul>
           <a href="{% url 'jobs_detail' job.id %}"><button>View Details</button></a>
              </div>
            </div>
        </div>
      </section>

@endsection
