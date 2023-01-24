@extends('dashboard')
@section('content')
<main class="content-container">
    <section class="newsletter-create">
    <h1>Newsletter</h1>
    @if ($showForm)
        <form action="{{ route('newsletter.store') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            @if ($errors->has('title'))
                <span class="error-msg">Geben Sie einen Titel ein!</span>
            @endif
            <input type="text" name="title" id="title" class="input-design">
            <label for="text">Text:</label>
            @if ($errors->has('text'))
                <span class="error-msg">Geben Sie einen Text ein!</span>
            @endif
            <textarea name="text" id="text" class="input-design textarea-design"></textarea>
            <span class="newsletter-article-actions">
                <input type="submit" value="Newsletter erstellen" class="style-button form-button">
            </span>
        </form>
    </section>
    @else
        <form action="{{ route('subscriber.store') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="input-design">
            <input type="submit" value="Newsletter abonnieren" class="style-button form-button">
        </form>
    </section>
    @endif
    @foreach ($newsletters as $newsletter)
    <article class="newsletter-article">
        <div class="newsletter-header"><h2>{{ $newsletter->title }}</h2><p class="newsletter-date">{{ date_format($newsletter->created_at, "d.m.Y") }}</p></div>
        <div class="newsletter-content"><p>{{ $newsletter->body }}</p></div>
        @if ($showForm)
        <span class="newsletter-article-actions">
            <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Newsletter löschen" class="style-button form-button">
            </form>
            <form action="{{ route('newsletter_edit', $newsletter->id) }}" method="get">
                @csrf
                <input type="submit" value="Newsletter bearbeiten" class="style-button form-button">
            </form>
        </span>
        @endif
    </article>
    @endforeach
</main>
@endsection
