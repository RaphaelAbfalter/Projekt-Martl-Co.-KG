@extends('dashboard')
@section('content')
<main>
    <h1>Nachricht von {{ $data['name'] }}</h1>
    <div>
        <p>Eintrag: {{$data['id']}}</p>
        <p>Email: {{$data['email']}}</p>
        <p>Nachricht: {{$data['message']}}</p>
        <p>{{date_format($data['created_at'], 'd.m.Y H:i')}}</p>
        <a href="/delete/{{ $data['id'] }}">Löschen</a>
    </div>
</main>
@endsection
