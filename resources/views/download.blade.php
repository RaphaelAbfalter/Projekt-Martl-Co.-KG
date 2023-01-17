@extends('dashboard')
@section('content')
<body>
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
                <div id="specific_users" style="display: none">
                    <label for="users">Select specific users:</label>
                    <select id="users" name="users[]" multiple>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <input type="submit" value="Upload">
            </form>
        @endif
    </div>

<script>
    document.getElementById("access_level").addEventListener("change", function(){
        if(this.value === "specific"){
            document.getElementById("specific_users").style.display = "block";
        } else {
            document.getElementById("specific_users").style.display = "none";
        }
    });
</script>
@endsection
