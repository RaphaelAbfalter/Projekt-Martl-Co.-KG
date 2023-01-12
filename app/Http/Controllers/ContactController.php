<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function show()
    {
        return response()->json(Contact::all());
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required|min:10'
        ]);

        Contact::create([
            'name'    => $request['name'],
            'email'   => $request['email'],
            'message' => $request['message']
        ]);

        return Redirect('dashboard');
    }


}
