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
        $request->validate([
            'file' => 'required|file|max:2048',
            'access_level' => 'required|in:all,specific',
        ]);

        $file = $request->file('file');
        $access_level = $request->input('access_level');
        $user_id = null;

        if ($access_level == 'specific') {
            $request->validate([
                'users' => 'required|array',
                'users.*' => 'required|exists:users,id',
            ]);
            $user_id = $request->input('users')[0];
        }

        $user = auth()->user();

        if ($user && $user->is_admin) {
            $filename = uniqid().'.'.$file->extension();

            $path = 'downloads/'.$filename;

            $file->storeAs('downloads', $filename);

            $download_file = DownloadFile::create([
                'path' => $path,
                'user_id' => $user_id,
                'visibility' => $access_level,
            ]);

            return back()->with('success', 'File has been uploaded successfully.');
        } else {
            return back()->with('error', 'You are not authorized to upload files.');
        }
    }

}