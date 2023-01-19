<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function destroy(Request $request)
    {
        $isAdmin = Auth::user() && Auth::user()->admin;
        if($isAdmin && $request['id'])
        {
            Contact::findOrFail($request['id'])->delete();
        }

        return view('contactView', ["data" => Contact::all()]);
    }

    public function show()
    {
        $isAdmin = Auth::user() && Auth::user()->admin;

        if($isAdmin)
        {
            return view('contactView', ["data" => Contact::all()]);
        }
        return back()->with('error', 'You are not authorized to view messages');
    }

    public function find(Request $request)
    {
        $isAdmin = Auth::user() && Auth::user()->admin;

        if($isAdmin)
        {
            $data = Contact::findOrFail($request['id']);
             
            return view('contactView_singleMessage', ['data'=>$data]);
        }

        return back()->with('error', 'You are not authorized to view messages');
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

        return Redirect('/');
    }
}
