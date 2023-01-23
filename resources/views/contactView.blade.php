@extends('dashboard')
@section('content')
<main class="content-container">
    <table class="contacts-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Nachricht</th>
                <th>Datum</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
            <tr>
                <th>{{ $user['id'] }}</th>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ substr($user['message'], 0, 20) }}</td>
                <td>{{ date_format($user['created_at'], 'd.m.Y H:i') }}</td>
                <td><a href="/contactMessage/{{ $user['id'] }}">Show</a></td>
                <td><a href="/delete/{{ $user['id'] }}">Löschen</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection