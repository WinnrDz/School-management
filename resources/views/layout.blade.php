<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <nav class="navbar">
        <div class="logo">School Management</div>
        <ul class="nav-links">
            <li><a href="#">Classes</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Teachers</a></li>
            <li><a href="#">About</a></li>
            <li><a href="{{ route('login') }}">login</a></li>
            <li><a href="{{ route('register') }}">register</a></li>
        </ul>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>
</body>

</html>