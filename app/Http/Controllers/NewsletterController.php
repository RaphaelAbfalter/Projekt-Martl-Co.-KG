<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        
        Mail::to('admin@regina-martl.at')->send(new NewSubscriber($subscriber));

        return redirect()->back()->with('success', 'You have been subscribed to our newsletter!');
    }
}
