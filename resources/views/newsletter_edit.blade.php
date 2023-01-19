@extends('dashboard')

@section('content')
    <h1>Edit Newsletter</h1>
    <form action="{{ route('newsletter.update', $newsletter->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $newsletter->title }}">
        <br>
        <label for="text">Text:</label>
        <textarea name="text" id="text">{{ $newsletter->body }}</textarea>
        <br>
        <input type="submit" value="Save Changes">
    </form>
@endsection