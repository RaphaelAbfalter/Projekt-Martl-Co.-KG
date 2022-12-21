<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function show()
    {
        return response()->json(Newsletter::all());
    }

    public function create(Request $request)
    {
        $request->validate([
            'email'   => 'required|email'
        ]);

    }

    public function delete(Request $request)
    {

        if (Newsletter::find($request['id'])) {
            Newsletter::where('id', $request['id'])->delete();
        }

    }

}
