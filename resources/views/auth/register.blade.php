 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
 
 <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1>Sign up</h1>
        <p>Create an account to continue.</p>
        <label for="name"> Name.</label>
        <input id="name" type="text" name="name" required autofocus autocomplete="name" />
        <label for="email" > Email.</label>
        <input id="email" type="email" name="email" required autocomplete="username" />
        <label for="password">Password.</label>
        <input id="password"
                type="password"
                name="password"
                required/>
            <label for="password_confirmation" >Confirm Password.</label>

            <input id="password_confirmation"
                type="password"
                name="password_confirmation" required/>
                <p>It must be a combination of minimum 8 letters, numbers, and symbols.</p>

            <a style="text-decoration: none; color: #2740ff;" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
    </form>

    </body>

</html>