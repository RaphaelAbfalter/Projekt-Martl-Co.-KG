<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function destroy(Request $request)
    {
        if($request['id'])
        {
            Contact::findOrFail($request['id'])->delete();
        }

        return view('contactView', ["data" => Contact::all()]);
    }

    public function show()
    {
        return view('contactView', ["data" => Contact::all()]);
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
