@extends('dashboard')
@section('content')
<div class="main">
    <h1>Subscribe to our newsletter</h1>
    <form action="{{ route('newsletter.store') }}" method="post">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        <input type="submit" value="Subscribe">
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection