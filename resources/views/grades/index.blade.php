@extends('layout')

@section('content')
<main>
    <h1>Grades</h1>

    <div class="grid">
        @forelse ($grades as $grade)
            <div>
                <div><strong>{{ $grade->grade }}</strong></div>
                <div style="font-size: 0.9rem; opacity: 0.8;">
                    subject: {{ $grade->subject->name ?? 'N/A' }}
                </div>
                <div style="font-size: 0.9rem; opacity: 0.8;">
                    student: {{ $grade->student->name ?? 'N/A' }}
                </div>
            </div>
        @empty
            <p>No grades available.</p>
        @endforelse
    </div>

    <a href="{{ route('grades.create') }}" style="margin-top: 1rem; color: pink;">Create Grade</a>
</main>
@endsection
