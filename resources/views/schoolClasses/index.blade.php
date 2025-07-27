@extends('layout')
@section('content')

<h3>Classes</h3>

<div class="grid">
    @foreach ($classes as $class)
    <div> {{$class->name}}</div>
    @endforeach
</div>


<a href="{{ route('schoolClasses.create') }}" class="btn-create">Create Class</a>
<p class="msg-supports">Sorry, your browser doesn't support <code>style()<code> queries</p>

@endsection