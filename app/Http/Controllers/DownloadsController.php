<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Contact;
use App\User;

class DownloadsController extends BaseController
{
    public function show() {
        return view('downloads');
    }
}
