@extends('layout')

@section('content')
<main>
    <h1>Students</h1>

    <div class="grid">
        @forelse ($students as $student)
            <div>
                <div><strong>{{ $student->name }}</strong></div>
                <div style="font-size: 0.9rem; opacity: 0.8;">
                    Class: {{ $student->schoolClass->name ?? 'N/A' }}
                </div>
            </div>
        @empty
            <p>No students available.</p>
        @endforelse
    </div>

    <a href="{{ route('students.create') }}" style="margin-top: 1rem; color: pink;">Create Student</a>
</main>
@endsection
