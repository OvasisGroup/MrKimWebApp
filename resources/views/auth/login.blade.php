<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mr.Kim App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>

<section class="authentication">
<div class="logna">


<img
              src="{{ asset('images/mrkim-logo.svg') }}"
              width="200px" 
              alt="mr. kim logo"
            />

            <br>
            <h2>Welcome to Mr.Kim App</h2>
            <p class="pls">Please login to continue</p>
            <br>

<form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" id="terms" name="terms" required>
      I accept the <a href="/terms" target="_blank">Terms and Conditions</a>
    </label>
    
    <p class="pinte">Don't have an account? <a href="">Register</a></p>
</form>
</section>
</div>

</body>
</html>