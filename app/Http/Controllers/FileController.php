<?php

namespace App\Http\Controllers;

use App\Models\DownloadPath;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function download(DownloadPath $file)
    {
        $path = storage_path('app/'.$file->path);
        return response()->download($path, basename($path));
    }

    public function index()
    {
        $files = DownloadPath::where('user_id', auth()->id())->get();
        $showUpload = auth()->check();
        return view('download', compact('files', 'showUpload'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|file|max:2048',
        ]);

        $file = $request->file('fileToUpload');
        $path = $file->store('files');

        DownloadPath::create([
            'path' => $path,
            'user_id' => Auth::id()
        ]);

        return back()->with('success', 'File uploaded successfully');
    }
}
