<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer type="text/javascript" src="Downloads.js"></script>
    <title>Downloads</title>
    <style>.downloads{
        display:flex;
        flex-direction:column;
    }
    </style>
</head>

<body>
    <?php

    //connect to database
    //table/sql query
    //get list of record
    //while data is set, output element
    //mysqli_query(DATENBANK, SQL-BEFEHL)
    //mysqli_fetch_assoc($mysqli_query result variable)

    /*while(data){
        echo "<a href='".$data["path"]."' download><img src='image/dataIcon.png' width='75'/></a>";
    }*/


    echo '
    <nav>Navigation</nav>
    <h1>Downloads</h1>
    <div class="downloads" width="75">
    <span>
    <a href="Files\files.7z" download onclick="createDownlaod()"><img src="image/dataIcon.png" width="75"/></a>
    </span>
    <a href="Files\files.7z" download><img src="image/dataIcon.png" width="75"/></a>
    <a href="Files\files.7z" download><img src="image/dataIcon.png" width="75"/></a>
    <a href="Files\files.7z" download><img src="image/dataIcon.png" width="75"/></a>
    <a href="Files\files.7z" download><img src="image/dataIcon.png" width="75"/></a>
    </div>

    <br></br>';

echo "
<form action='' method='post'><input type='file' name='fileToUpload' id='fileToUpload'>
<input type='submit' value='Hochladen' name='submit'>
</form>";
    if(!empty($_FILES['fileToUpload'])){

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $uploadOk = 1;
        }
    }
    //https://wiki.selfhtml.org/wiki/PHP/Tutorials/File_Upload wegen upload anschauen

echo "<footer>Hier footer</footer>'";

    ?>

</body>
</html>
