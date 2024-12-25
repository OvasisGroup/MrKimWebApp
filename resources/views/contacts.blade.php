

@extends('layouts.app')

@section('title', 'Home')

@section('content')


<section class="section-contacts"></section>
<div className="topgreen"></div>
    <div class='contactspage'>
        <div class='pichacontacts'></div>
        <div class='daform'>
        <h4>Hello</h4>
                <h3>Please Fill the Form Below to reach out to Us!</h3>
        <p>We will be sure to get back to you within the shortest time possible</p>

       
        
        <form action="" method="POST">
  
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