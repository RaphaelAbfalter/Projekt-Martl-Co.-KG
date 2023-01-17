<?php

namespace App\Http\Controllers;

use App\Models\DownloadFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    protected $ftp_server = "ftp.world4you.com";
    protected $ftp_username = "ftp6257979_jurkic";
    protected $ftp_userpass = "";

    public function download(DownloadFile $file)
    {
        
    }

    public function index()
    {
        $files = DownloadFile::where('user_id', auth()->id())->orWhere('visibility','all')->get();

        $user = Auth::user();
        if($user)
        {
            if($user->admin)
            {
                return view('download', ['files' => $files, 'isAdmin' => true]);
            }
        }

        return view('download', ['files' => $files, 'isAdmin' => false]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|file|max:2048',
        ]);

        $file = $request->file('fileToUpload');
        $path = 'pp02/' . $file->getClientOriginalName();
        
        // Connect to FTP server
        $ftp_conn = ftp_connect($this->ftp_server) or die("Could not connect to $this->ftp_server");
        $login = ftp_login($ftp_conn, $this->ftp_username, $this->ftp_userpass);

        // upload file
        dd('trying to create entry');
        if (ftp_put($ftp_conn, $path, $file->getRealPath(), FTP_ASCII)) {
            // close connection
            dd($file->getClientOriginalName(). ' uploaded');
            ftp_close($ftp_conn);

            $downloadFile = new DownloadFile([
                'path' => $path,
                'user_id' => Auth::id(),
                'visibility' => $request->access_level,
            ]);
            $downloadFile->save();

            if($request->access_level == 'specific') {
                $downloadFile->users()->attach($request->users);
            }

            return back()->with('success', 'File uploaded successfully');
        } else {
            // close connection
            ftp_close($ftp_conn);
            return back()->with('error', 'Failed to upload file');
        }
    }
}