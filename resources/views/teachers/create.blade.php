@extends('layout')

@section('content')
<main>
    <h1>Create Teacher</h1>

    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="subject_id">Subject</label>
        <select name="subject_id" id="subject_id" required>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>
</main>
@endsection
