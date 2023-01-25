@extends('dashboard')

@section('content')
<main class="content-container">
    <section class="newsletter-edit">
        <h1>Newsletter bearbeiten</h1>
        <form action="{{ route('newsletter.update', $newsletter->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $newsletter->title }}" class="input-design">
            <label for="text">Text:</label>
            <textarea name="text" id="text" class="input-design textarea-design input-edit">{{ $newsletter->body }}</textarea>
            <input type="submit" value="Änderungen speichern" class="style-button form-button user-button">
        </form>
    </section>
</main>
@endsection