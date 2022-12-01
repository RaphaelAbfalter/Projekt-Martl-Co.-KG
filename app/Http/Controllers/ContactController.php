<?php
namespace App\Http\Controllers;

use App\Contact;
use App\User;

class ContactController extends Controller
{
    public function show()
    {
        return response()->json(Contact::all());

    }
}
