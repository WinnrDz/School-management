@extends('layout')

@section('content')
<main>
    <h1>Subject</h1>

    <div class="grid">
        @forelse ($subjects as $subject)
            <div><strong>{{ $subject->name }}</strong></div>
        @empty
            <p>No subjects available.</p>
        @endforelse
    </div>

    <a href="{{ route('subjects.create') }}" style="margin-top: 1rem; color: pink;">Create Subject</a>
</main>
@endsection
