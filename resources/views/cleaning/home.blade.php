@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')

<div class="rts-banner-area-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="banner-wrapper-one">
                    <span class="pre-title wow fadeInUp">Meet Mr. Kim</span>
                    <h1 class="title wow fadeInUp" data-wow-delay=".3s">Mr. Kim <br> for <span>Cleaning</span>
                        Services</h1>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Mr. Kim is here to help you with your project. We are a team of professional service providers who are here to help you with your project. </p>
                    <a href="{{ route('cleaning.estimates') }}" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".7s">
                        Get An Estimate
                        <img class="injectable" src="assets/images/banner/01.svg" alt="icons">
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="right-clippath-wrapper d-flex">
                    <div class="left-image mt--120 mt_sm--70 jarallax jara-mask-1" data-speed=".7">
                        <img loading="lazy" rel="preload" class="jarallax-img" src="assets/images/banner/08.webp"
                            alt="banner">
                    </div>
                    <div class="left-image jarallax jara-mask-1" data-speed=".7">
                        <img loading="lazy" rel="preload" class="jarallax-img" src="assets/images/banner/09.webp"
                            alt="banner">
                    </div>
                    <div class="shape-image">
                        <img loading="lazy" rel="preload" src="assets/images/banner/shape/01.png" alt="shape"
                            class="one wow move-left">
                        <img loading="lazy" rel="preload" src="assets/images/banner/shape/02.png" alt="shape"
                            class="two wow move-left">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts-banner area end -->

<!-- large video area start -->
<div class="alrge-video-area rts-section-gap">
    <div class="shape-top">
        <img loading="lazy" rel="preload" src="assets/images/video/shape/01.png" alt="" class="wow move-right"
            data-wow-offset="120">
    </div>
    <div class="shape-bottom">
        <img loading="lazy" rel="preload" src="assets/images/video/shape/02.png" alt="" class="wow move-left"
            data-wow-offset="120">
    </div>
    <div class="container-large">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-video-top">
                    <p class="large">
                        We have built a <span class="wow move-right" data-wow-offset="120"> purpose-driven</span>
                        platform 
                        to drive action and
                        cooperation and
                        to <span class="wow move-left" data-wow-offset="120">revolutionize</span> progress.
                    </p>
                    <p class="disc">
                        We have built a purpose-driven platform in the Metaverse to drive action and cooperation and
                        to revolutionize progress.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 mt--70">
                <div class="image--large-video jarallax">
                    <img class="jarallax-img" src="assets/images/video/01.webp" alt="large">
                    <div class="vedio-icone">
                        {{-- <a class="video-play-button play-video popup-video"
                            href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                            <span></span>
                        </a> --}}
                        <video autoplay muted loop class="vids wow fadeInUp" data-wow-delay=".3s">
                            <source src="{{ asset('images/cleaning_video.mp4') }}" type="video/mp4" class="jarallax-img">
                            Your browser does not support the video tag.
                          </video>
                        <div class="video-overlay">
                            <a href="index.html#section1" class="video-overlay-close">×</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="large-video-bottom">
                    <h2 class="title wow fadeInUp" data-wow-delay=".1s">Download our Cloud Migration Guide</h2>
                    <p class="disc wow fadeInUp" data-wow-delay=".3s">
                        Learn best practices, avoid common pitfalls, and discover how to maximize the benefits of
                        cloud computing for your business.
                    </p>
                    <a href="service-single.html" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        View Solutions
                        <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- large video area end -->

@endsection