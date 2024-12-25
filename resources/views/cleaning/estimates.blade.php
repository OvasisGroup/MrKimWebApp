@extends('cleaning.layouts.app')

@section('title', 'Home')

@section('content')

<section>
    <img src="{{ asset('images/bench-cleaning.jpg') }}" width="100%" style="margin-top: 60px;"/>
</section>
<section class="imagesa">
<div class="lwet"><img src="{{ asset('images/SVG/handwash.svg') }}" ></div>
</section>
<section class="section-contact">
    <div class="ppp">
        <h3 class="ppph">Request an Estimate with Mr. Kim</h3>
        <p class="pppp">Mr. Kim is here to help you with your project. We are a team of professional service providers who are here to help you with your project. We will help you get the right professional service provider for your project and we will also help you schedule your project.</p>

        <form action="" method="POST">
            <div class="formgroup">
            <input type="text" name="firstname" id="firstname" value="" required class="" placeholder="Enter First Name"/>
            <input type="text" name="lastname" id="lastname" required class="" placeholder="Enter Last Name"/>
            </div>
            
            <div class="formgroup">
                <input type="email" name="email" id="email" value="" required class="" placeholder="Enter Email Address"/>
                <input type="text" name="phone" id="phone" required class="" placeholder="Enter Phone Number"/>
            </div>
            <div class="formgroup">
                <input type="text" name="address" id="address" value="" required class="" placeholder="Enter Full Address"/>
            </div>
            <div class="formgroup">
                <input type="text" name="aptnumber" id="aptnumber" value="" required class="" placeholder="Enter Apartment/Suite Number"/>
            </div>
            <textarea
            type="text"
            rows="5"  
            cols="50" 
            name="message"
            placeholder="Enter Remarks"
            id="message"
            class="masaga"
            required
            ></textarea>
            <p>A representative will contact you soon to discuss pricing and scheduling.</p>
        <button type="submit" class="button">SUBMIT REQUEST</button>
        </form>
        <p>By clicking ‘Submit’, I give Mr. Kim consent to call/text me at my phone number above about my request and other offers (including via automated technology) and to send me marketing and/or promotional messages. Consent is not a condition of purchase. Opt out anytime by replying to us with “STOP.” Message and data rates may apply. I understand that the information I submit may be recorded. Please refer to our Privacy Policy for your other rights.</p>
    </div>

</section>


           


@endsection