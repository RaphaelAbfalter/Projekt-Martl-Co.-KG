@extends('dashboard')
@section('content')
    <nav>Navigation</nav>
    <h1>Newsletters</h1>
    @if (Auth::check() && Auth::user()->admin)
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
        <form action="{{ route('newsletter.store') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <input type="submit" value="Subscribe to Newsletter">
        </form>
    @endif
    <ul>
        @foreach ($newsletter as $newsletters)
            <li>
                <h2>{{ $newsletter->title }}</h2>
                <p>{{ $newsletter->text }}</p>
                <p>Published at: {{ $newsletter->created_at }}</p>
                @if (Auth::check() && Auth::user()->admin)
                    <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete Newsletter">
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
    <footer>Here footer</footer>
@endsection