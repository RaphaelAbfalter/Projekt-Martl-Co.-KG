<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'newsletter_email'   => 'required|email'
        ]);

        if(!Subscriber::all()
            ->where('email', '=', $request['newsletter_email'])
            ->count())
        {
            $subscriber = new Subscriber();
            $subscriber->email = $request->input('newsletter_email');
            $subscriber->save();
        }

        return redirect()->route('newsletter');
    }
}
