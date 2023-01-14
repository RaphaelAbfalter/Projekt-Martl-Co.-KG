<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads</title>
    <style>
        .downloads {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <nav>Navigation</nav>
    <h1>Downloads</h1>
    <div class="downloads">
        <ul>
            @foreach($files as $file)
                <li>
                    <a href="{{ route('download.file', $file->id) }}">{{ basename($file->path) }}</a>
                </li>
            @endforeach
        </ul>
        <br>
        @if($showUpload)
            <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <input type="submit" value="Upload">
            </form>
        @endif
    </div>
    <footer>Hier footer</footer>
</body>
</html>




