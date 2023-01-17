<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DownloadFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
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
                $users = User::where('isAdmin', false)->get();

                return view('download', ['files' => $files, 'isAdmin' => true, 'users' => $users]);
            }
        }

        return view('download', ['files' => $files, 'isAdmin' => false]);
    }

    public function upload(Request $request)
    {
        $user = Auth::user();

        if($user)
        {
            if($user->admin)
            {
                
            }
        }
    }
}