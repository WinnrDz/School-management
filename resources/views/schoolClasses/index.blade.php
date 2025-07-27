<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>

    <h1>School Management</h1>

    <h3>Classes</h3>

    <div class="grid">
        @foreach ($classes as $class)
        <div> {{$class->name}}</div>
        @endforeach
    </div>


    <a href="{{ route('schoolClasses.create') }}" class="btn-create">Create Class</a>
    <p class="msg-supports">Sorry, your browser doesn't support <code>style()<code> queries</p>
</body>

</html>