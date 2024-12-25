@extends('layouts.app')

@section('title', 'Home')

@section('content')


<section class="section-contacts"></section>
<div className="topgreen"></div>
    <div class='contactspage'>
        <div class='pichacontacts'></div>
        <div class='daform'>
        <h4>Hello </h4>
                <h3>Thank you for Visiting Mr. Kim for your Services</h3>
        <p>Your experience withour app, website, service and products is important to us, and we're always looking for ways to improve.</p>
        <p>We would greatly appreciate it if you could take a moment to share your thoughts with us. Your feedback will help us understand what we're doing well and where we can make enhancements to improve your experience in the future.

      
        
        <form action="{% url 'contacts' %}" method="POST">

            <input type="text" name="name" id="name" value="" required class="posta"/>
            <input type="phone2numeric" name="telephone" id="telephone" required class="posta"/>
            <textarea
            type="text"
            rows="10"  
            cols="50" 
            name="message"
            id="message"
            required
            ></textarea>
        <button type="submit" class="button">Submit</button>
        </form>
        </div>    
    </div>


@endsection