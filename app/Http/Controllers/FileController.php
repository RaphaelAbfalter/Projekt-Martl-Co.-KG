<?php

namespace App\Http\Controllers;

use App\Models\DownloadFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download($id)
    {
        $file = DownloadFile::findOrFail($id);

        if ($file->visibility == 'all' || ($file->visibility == 'specific' && $file->user_id == auth()->id())) {
            return Storage::download($file->path, $file->fileName);
        } else {
            return back()->with('error', 'File is not available for download');
        }
    }

    public function index()
    {
        
        $isAdmin = Auth::user() && Auth::user()->admin;
        $users = User::all();

        $files = ($isAdmin) ? DownloadFile::all() : DownloadFile::where('visibility', 'all')->orWhere(function ($query) {
            $query->where('visibility', 'specific')->where('user_id', auth()->id());
        })->get();
       
        if($files->count() > 0)
        {
            return view('download', ['files' => $files, 'isAdmin' => $isAdmin, 'users' => $users, 'no_files' => false]);
        }

        return view('download', ['files' => $files, 'isAdmin' => $isAdmin, 'users' => $users, 'no_files' => true]);
    }

    public function upload(Request $request)
    {
        $isAdmin = Auth::user() && Auth::user()->admin;

        if($isAdmin)
        {
            $file = $request->file('file');
            $path = Storage::putFile('public/files', $file);
            $visibility = $request->input('access_level');


            $user_id = ($visibility == 'all') ? Auth::user()->id : $request->input('users')[0];
            $fileName = $file->getClientOriginalName();
            
            DownloadFile::create(['path' => $path, 'fileName'=>$fileName, 'user_id' => $user_id, 'visibility' => $visibility]);

            return redirect()->route('download')->with('success', 'File has been uploaded successfully');
        }

        return redirect()->route('download')->with('error', 'File cannot be uploaded due to missing authorization.');
    }

}