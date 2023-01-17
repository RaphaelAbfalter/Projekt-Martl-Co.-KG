<?php

namespace App\Http\Controllers;

use App\Models\DownloadFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download(DownloadFile $file)
    {
        if ($file->visibility == 'all' || ($file->visibility == 'specific' && $file->user_id == auth()->id())) {
            return Storage::download($file->path, $file->name);
        } else {
            return back()->with('error', 'File is not available for download');
        }
    }

    public function index()
    {
        $files = DownloadFile::where('visibility', 'all')->orWhere(function ($query) {
            $query->where('visibility', 'specific')->where('user_id', auth()->id());
        })->get();

        $isAdmin = Auth::user() && Auth::user()->admin;
        $users = User::all();

        return view('download', compact('files', 'isAdmin', 'users'));
    }

    public function upload(Request $request)
    {
        $isAdmin = Auth::user() && Auth::user()->admin;

        if($isAdmin)
        {
            $request->validate([
                'file' => 'required|file|max:2048',
            ]);
    
            $file = $request->file('file');
            $path = $file->store('files');
            $visibility = $request->input('access_level');
            $user_id = ($visibility == 'all') ? null : $request->input('users');
    
            DownloadFile::create(['path' => $path, 'user_id' => $user_id, 'visibility' => $visibility]);
    
            return redirect()->route('downloads')->with('success', 'File has been uploaded successfully');
        }

        return redirect()->route('downloads')->with('error', 'File cannot be uploaded due to missing authorization.');
    }

}