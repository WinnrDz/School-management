<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>Create a New Class</h1>

    <form action="{{ route('schoolClasses.store') }}" method="POST">
        @csrf
        <div class="grid">
            <div>
                <label for="name">Class Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="level">Level</label>
                <select name="level" id="level">
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                </select>
            </div>

            <div class="full-width">
                <button type="submit">Create Class</button>
            </div>
        </div>
    </form>

    <p class="msg-supports">Sorry, your browser doesn't support <code>style()</code> queries.</p>

</body>

</html>