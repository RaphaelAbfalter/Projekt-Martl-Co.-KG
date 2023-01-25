@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Anmelden</h1>
    <form method="POST" action="{{ route('login.custom') }}" class="user-form">
        @csrf
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
        <div class="checkbox">
            <label for="check">
                <input type="checkbox" id="check" name="remember">
                Anmeldedaten speichern?
            </label>
        </div>
        <button type="submit" class="style-button form-button user-button">Anmelden</button>
    </form>
</main>
@endsection
