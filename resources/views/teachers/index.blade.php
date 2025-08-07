@extends('layout')

@section('content')
<main>
    <h1>Teachers</h1>

    <div class="grid">
        @forelse ($teachers as $teacher)
            <div>
                <div><strong>{{ $teacher->name }}</strong></div>
                <div style="font-size: 0.9rem; opacity: 0.8;">
                    subject: {{ $teacher->subject->name ?? 'N/A' }}
                </div>
            </div>
        @empty
            <p>No teachers available.</p>
        @endforelse
    </div>

    <a href="{{ route('teachers.create') }}" style="margin-top: 1rem; color: pink;">Create Teacher</a>
</main>
@endsection
