@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Kunden erstellen</h1>
    <form action="{{ route('register.custom') }}" method="POST" class="user-form">
        @csrf
        <label for="name">Vorname und Nachname:</label>
        <input type="text" placeholder="Name" id="name" class="input-design" name="name" required autofocus>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        <label for="email">E-Mail:</label>
        <input type="text" placeholder="E-Mail" id="email" class="input-design" name="email" required autofocus>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <label for="password">Passwort:</label>
        <input type="password" placeholder="Passwort" id="password" class="input-design" name="password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        <button type="submit" class="style-button form-button user-button">Benutzer registrieren</button>
    </form>
</main>
@endsection
