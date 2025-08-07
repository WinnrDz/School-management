@extends('layout')

@section('content')
<main>
    <h1>Create Subject</h1>

    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <button type="submit">Save</button>
    </form>
</main>
@endsection
