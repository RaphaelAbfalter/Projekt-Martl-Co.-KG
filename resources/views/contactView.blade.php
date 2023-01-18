@extends('dashboard')
@section('content')

    <div>
        <table class="table table-light" width="100px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Nachricht</th>
                <th scope="col">Datum</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach ($data as $user)
                <tr>
                    <th scope="row">{{ $user['id'] }}</th>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ substr($user['message'], 0, 20) }}</td>
                    <td>{{ date_format($user['created_at'], 'd.m.Y H:i') }}</td>
                    <td><a href="/delete/{{ $user['id'] }}">Löschen</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
