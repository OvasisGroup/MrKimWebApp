@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div>
            <div class="aboutimage">
                <img src="{{ asset('images/about-header.jpeg') }}" width="100%" style="margin-top: 60px;"/>
            </div>
            <div class="category-section">
                <div class="category-content" data-aos="fade-up">
                    <div class="category-left">
                        <h1>About Mr. Kim</h1>
                      <div class="plus"><p>Make Request  
                          <img src="{{ asset('images/plus2.svg') }}" width='10px' alt="Plus" priority className="imageplus"/></p>
                      </div>
                    </div>
                    <div className="category-below">
                        <p>Looking for Open Job Opportunities? <span><a href="{% url 'about' %}">Find Jobs</a> </span></p>
                    </div>
                    
                </div> 
            </div>
            <section class="abtheader">
                <div class="abtside">
                    <h3>Meet Mr.KIM, your source for trusted local professional service providers in your area. </h3>
                    
                </div>
            <div class="about-introduction" data-aos="fade-up">

                
            </div>
            </section>
            <div class="missions">
                <div class="mission-image">
                    <img src="{{ asset('images/howdiduknow.svg') }}" width="200px" alt="Plus" priority class="imageplus" />
                </div>
                <div class="mission-contentt">
                    <h3>How Can Mr.KIM Help?</h3>
                    <p>Our family of professional Service providers work with rigorous quality standards to meet your project needs. With professional service providers living in your community, scheduling is quick and convenient. </p>
                </div>
            </div>
            <h1 class="who-serve">Who We Serve</h1>
            <section class="whoweserve">
                <div class="righta" style="background-image: url({{ asset('images/customers.jpeg') }}); background-position: center; background-size: cover; " >
                    
                </div>
                <div class="lefta">
                    <div>
                        <h1>Customers</h1>
                        <p>Our customers get personalized guidance on their projects that ranges from Automobile, Boda Boda, Tuk Tuk, Residential and commercial properties. </p>
                    </div>
                </div>
            </section>
            <section class="whoweservetwo">
                <div class="leftatwo">
                    <div>
                        <h1>Pros</h1>
                        <p>At Mr.KIM, local professional service providers can find the profitable jobs they need. We are proud to help pros grow their businesses, one job at a time.</p>
                    </div>
                </div>
                <div class="rightatwo" style="background-image: url({{ asset('images/pros.jpeg') }}); background-position: center; background-size: cover; "></div> 
            </section>
            <section class="whoweserve">
                <div class="righta" style="background-image: url({{ asset('images/community.jpeg') }}); background-position: center; background-size: cover; "></div>
                <div class="lefta">
                    <div>
                        <h1>Community</h1>
                        <p>Mr. Kim support local economies and build stronger communities where we operate through the connection that we facilitate. Mr. KIM is for everybody.
                        </p>
                    </div>
                </div>
            </section>
            <section class="whoweservetwo">
                <div class="leftatwo">
                    <div>
                        <h1>Vendors</h1>
                        <p>Mr Kim makes it easy, quick and convenient for the professional service providers and the customers to get the parts,supplies and many more..</p>
                    </div>
                </div>
                <div class="rightatwo" style="background-image: url({{ asset('images/vendor.jpeg') }}); background-position: center; background-size: cover; " ></div>
            </section>

            <section class="mean">
                <div class="mission-contentt">
                    <h3>What does it mean to choose Mr.KIM</h3>
                    <p>By choosing Mr.KIM, it means no more guesswork and tediously scrolling through websites and APP reviews and making cold phone calls. Below are the reasons why you should choose Mr.KIM for your next project. </p>
                </div>

                <p>Our App and website provide easy scheduling.</p>
                <p>Job is done right the first time.</p>
                <p>On-time arrival of our professional service providers</p>
                <p>No job too small or too big. You Name it! We do it!</p>
                <p>Wide variety of repair, maintenance, and improvements services</p>
                <p>Professional service providers have an average of 10 years’ experience in the trades and are fully insured for your safety.</p>
                <p>Our quality workmanship is guaranteed.</p>
            </section>

        </div>


@endsection