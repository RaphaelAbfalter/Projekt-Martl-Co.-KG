@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Nachricht von {{ $data['name'] }}</h1>
    <section class="contacts-single-section">
        <p>Eintrag: {{$data['id']}}</p>
        <p>Email: {{$data['email']}}</p>
        <p>Nachricht: {{$data['message']}}</p>
        <p>{{date_format($data['created_at'], 'd.m.Y H:i')}}</p>
        <a class="style-button form-button user-button" href="/delete/{{ $data['id'] }}">Löschen</a>
    </section>
</main>
@endsection
