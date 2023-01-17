@extends('dashboard')
@section('content')
    <h1>Newsletters</h1>
    @if ($showForm)
        <form action="{{ route('newsletter.store') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="text">Text:</label>
            <textarea name="text" id="text"></textarea>
            <br>
            <input type="submit" value="Create Newsletter">
        </form>
    @else
        <form action="{{ route('subscriber.store') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <input type="submit" value="Subscribe to Newsletter">
        </form>
    @endif
    <ul>
        @foreach ($newsletters as $newsletter)
            <li>
                <h2>{{ $newsletter->title }}</h2>
                <p>{{ $newsletter->body }}</p>
                <p>Published at: {{ $newsletter->created_at }}</p>
                @if ($showForm)
                    <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete Newsletter">
                    </form>
                    <form action="{{ route('newsletter_edit', $newsletter->id) }}" method="get">
                        @csrf
                        <input type="submit" value="Edit Newsletter">
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
