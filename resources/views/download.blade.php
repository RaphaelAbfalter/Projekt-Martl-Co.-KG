@extends('dashboard')
@section('content')
<body>
    <h1>Downloads</h1>
    <div class="downloads">
        @if(isset($no_files) && $no_files)
        <p>There are no files available for download.</p>
        @else
        <ul>
            @foreach($files as $file)
            <li>
                <a href="{{ route('download.file', $file->user_id) }}">{{ $file->fileName }}</a>
            </li>
            @endforeach
        </ul>
        @endif
        <br>
        @if($isAdmin)
            <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <label for="file">Select file to upload:</label>
                <input type="file" name="file" id="file" required>
                <br>
                <label for="access_level">Select access level:</label>
                <select id="access_level" name="access_level" required>
                    <option value="all">All Users</option>
                    <option value="specific">Specific Users</option>
                </select>
                <br>
                <div id="specific_users" style="display: none">
                    <label for="users">Select specific users:</label>
                    <select id="users" name="users[]" multiple>
                        @foreach($users as $user)
                            <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <input type="submit" value="Hochladen" class="style-button form-button">
            </form>
        @endif
    </div>

@if($isAdmin)
<script>
    document.getElementById("access_level").addEventListener("change", function(){
        if(this.value === "specific"){
            document.getElementById("specific_users").style.display = "block";
        } else {
            document.getElementById("specific_users").style.display = "none";
        }
    });
</script>
@endif
@endsection
