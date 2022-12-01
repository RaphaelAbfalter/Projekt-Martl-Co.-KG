<?php
namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return response()->json(Contact::all());
    }

    public function save(Request $request)
    {
        $contacts = Contact::create($request->all());
        return response()->json($contacts, 201);
    }

}
