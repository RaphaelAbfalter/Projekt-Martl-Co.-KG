@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Downloads</h1>
    <section class="download-section">
        @if(isset($no_files) && $no_files)
        <p>There are no files available for download.</p>
        @else
            @foreach($files as $file)
            <a href="{{ route('download.file', $file->id) }}">{{ $file->fileName }}</a>
            @endforeach
        @endif
    </section>
    <section class="download-section">
        @if($isAdmin)
            <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <label for="file">Select file to upload:</label>
                <input type="file" name="file" id="file" required>
                <label for="access_level">Select access level:</label>
                <select id="access_level" name="access_level" required>
                    <option value="all">All Users</option>
                    <option value="specific">Specific Users</option>
                </select>
                <span id="specific_users" style="display: none">
                    <label for="user">Select specific users:</label>
                    <select id="user" name="user">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </span>
                <input type="submit" value="Hochladen" class="style-button form-button">
            </form>
        @endif
    </section>
@if($isAdmin)
<script>
    document.getElementById("access_level").addEventListener("change", function(){
        if(this.value === "specific"){
            document.getElementById("specific_users").style.display = "flex";
        } else {
            document.getElementById("specific_users").style.display = "none";
        }
    });
</script>
@endif
@endsection
