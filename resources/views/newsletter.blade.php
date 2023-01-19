@extends('dashboard')
@section('content')
<main class="content-container">
    <section>
    <h1>Newsletter</h1>
    @if ($showForm)
        <form action="{{ route('newsletter.store') }}" method="post" class="newsletter-create">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <label for="text">Text:</label>
            <textarea name="text" id="text"></textarea>
            <input type="submit" value="Newsletter erstellen" class="style-button form-button">
        </form>
    </section>
    @else
        <form action="{{ route('subscriber.store') }}" method="post">
            @csrf
            <span>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </span>
            <input type="submit" value="Newsletter abonnieren" class="style-button form-button">
        </form>
    </section>
    @endif
    <article class="newsletter-article">
        @foreach ($newsletters as $newsletter)
                <h2>{{ $newsletter->title }}</h2>
                <p>{{ $newsletter->body }}</p>
                <p>Published at: {{ $newsletter->created_at }}</p>
                @if ($showForm)
                <span>
                    <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete Newsletter" class="style-button form-button">
                    </form>
                    <form action="{{ route('newsletter_edit', $newsletter->id) }}" method="get">
                        @csrf
                        <input type="submit" value="Newsletter bearbeiten" class="style-button form-button">
                    </form>
                </span>
                @endif
        @endforeach
    </article>
</main>
@endsection
