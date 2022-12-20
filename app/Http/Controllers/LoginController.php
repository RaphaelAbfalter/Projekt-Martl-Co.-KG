<?php
namespace App\Http\Controllers;

use Auth;
use App\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\GenericUser;


class LoginController extends Controller
{
    public function show()
    {
        return response()->json(Login::all());
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required',
        ]);


        /*
        if (Hash::check($request["password"], '$2y$10$SpbYAAbmYOfvtcx1dIDfbOuFxco1lgyq/6SAKa2RHU4LsjRgi8Amm'))
        {

            $user = Auth::user();
            $user = $request->user();
        }else{
            echo "fehler";
        }
        */
        //return response()->json($request);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
            'newsletter'=> 'required'
        ]);

        return Login::create([
            'name'       => $request['name'],
            'email'      => $request['email'],
            'newsletter' => $request['newsletter'],
            'password'   => Hash::make($request['password'])
        ]);
    }

}
