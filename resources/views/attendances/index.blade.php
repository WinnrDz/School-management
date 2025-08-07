@extends('layout')

@section('content')
<main>
    <h1>Attendance</h1>

    <div class="grid">
        @forelse ($attendances as $attendance)
            <div>
                <div><strong>{{ $attendance->status }}</strong></div>
                <div>{{ $attendance->date }}</div>
                
                <div style="font-size: 0.9rem; opacity: 0.8;">
                    Class: {{ $attendance->student->name ?? 'N/A' }}
                </div>
            </div>
        @empty
            <p>No attendances available.</p>
        @endforelse
    </div>

    <a href="{{ route('attendances.create') }}" style="margin-top: 1rem; color: pink;">Mark attendance</a>
</main>
@endsection
