<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>



<body>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />
  
  <form method="POST" action="{{ route('login') }}">
    @csrf
    
    <h1>Welcome back.</h1>
    <p>Please login to continue.</p>
    <label>Email Adress.</label>
    <input type="email" name="email" placeholder="example@mail.com" id="email" required>
    <label>Password.</label>
    <input type="password" placeholder="Enter Password." id="password"
      name="password"
      required autocomplete="current-password">
    <p>It must be a combination of minimum 8 letters, numbers, and symbols.</p>
    <div class="options">
      <div class="checkbox">
        <input type="checkbox" id="remember_me" name="remember">
        <p>Remember me</p>
      </div>
      <span>forgot password ?</span>
    </div>
    <button>{{ __('Log in') }}</button>

    <a href="{{ route('register') }} " class="reg-btn">
      Register
    </a>
  </form>
</body>

</html>