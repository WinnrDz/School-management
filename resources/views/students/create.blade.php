@extends('layout')

@section('content')
<main>
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="class_id">Class</label>
        <select name="class_id" id="class_id" required>
            @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>
</main>
@endsection
