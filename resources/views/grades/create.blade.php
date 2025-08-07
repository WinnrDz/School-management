@extends('layout')

@section('content')
<main>
    <h1>Create Grade</h1>

    <form action="{{ route('grades.store') }}" method="POST">
        @csrf

        <label for="grade">Grade</label>
        <input type="text" name="grade" id="grade" required>

        <label for="subject_id">Subject</label>
        <select name="subject_id" id="subject_id" required>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>

        <label for="student_id">Student</label>
        <select name="student_id" id="student_id" required>
            @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>
</main>
@endsection
