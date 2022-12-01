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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function save(Request $request)
    {
        $contacts = Contact::create($request->all());
        return response()->json($contacts, 201);
    }

    /**
     * @param ID $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return response('Eintrag gelöscht', 200);
    }

}
