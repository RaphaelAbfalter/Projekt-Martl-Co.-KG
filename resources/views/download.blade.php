@extends('dashboard')
@section('content')
<body>
    <nav>Navigation</nav>
    <h1>Downloads</h1>
    <div class="downloads">
        <ul>
            @foreach($files as $file)
                <li>
                    <a href="{{ route('download.file', $file->id) }}">{{ $file->name }}</a>
                </li>
            @endforeach
        </ul>
        <br>
        @if($isAdmin)
            <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <label for="file">Select file to upload:</label>
                <input type="file" name="file" id="file">
                <br>
                <label for="access_level">Select access level:</label>
                <select id="access_level" name="access_level">
                    <option value="all">All Users</option>
                    <option value="specific">Specific Users</option>
                </select>
                <br>
                @if(old('access_level') == 'specific')
                    <label for="users">Select specific users:</label>
                    <select id="users" name="users[]" multiple>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                @endif
                <br>
                <input type="submit" value="Upload">
            </form>
        @endif
    </div>
@endsection
