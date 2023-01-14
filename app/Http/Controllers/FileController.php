<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download()
    {
        $query = "SELECT * FROM download_paths";
        $result = mysqli_query($db_link, $query);
        $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return view('download', compact('files'));
    }

    public function upload(Request $request)
    {
        // handle the file upload
        $link = 'ftp://ftp.example.com/files/'.$file_name;
        $query = "INSERT INTO download_paths (path) VALUES ('$link')";
        mysqli_query($db_link, $query);
        $last_id = mysqli_insert_id($db_link);
        return redirect()->route('download');
    }
}
