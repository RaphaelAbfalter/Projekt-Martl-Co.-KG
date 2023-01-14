<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Downloads</title>
</head>
<body>
    <nav>Navigation</nav>
    <h1>Downloads</h1>
    <div class="downloads">
        @foreach($files as $file)
            <a href="{{ $file['path'] }}" download><img src="image/dataIcon.png" width="75"/></a>
        @endforeach
    </div>
    <br>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>
    <footer>Hier footer</footer>
</body>
</html>