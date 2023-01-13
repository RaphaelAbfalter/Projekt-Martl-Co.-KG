<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ImpressumController extends Controller
{

public function show()
{
    return view( 'Impressum', Impressum::all());
}

/**
 * @param Request $request
 * @return \Illuminate\Http\JsonResponse
 */
public function save(Request $request)
{
    $contacts = Impressum::create($request->all());
    return response()->json($contacts, 201);
}
}
