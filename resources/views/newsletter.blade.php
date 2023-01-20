@extends('dashboard')
@section('content')
<main class="content-container">
    <section class="newsletter-create">
    <h1>Newsletter</h1>
    @if ($showForm)
        <form action="{{ route('newsletter.store') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="input-design">
            <label for="text">Text:</label>
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
        <h2>{{ $newsletter->title }}</h2>
        <p class="newsletter-content">{{ $newsletter->body }}</p>
        <p>Published at: {{ $newsletter->created_at }}</p>
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
