<?php
namespace App\Http\Controllers;

use App\Login;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return response()->json(Login::all());
    }

    public function login(Request $request)
    {
        
    }

}
