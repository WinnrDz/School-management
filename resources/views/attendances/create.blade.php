@extends('layout')

@section('content')
<main>
    <h1>Mark attendance</h1>

    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf

        <label for="status">status</label>
        <input type="text" name="status" id="status" required>

        <label for="date">date</label>
        <input type="date" name="date" id="date" required>

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
