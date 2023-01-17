<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        $user = Auth::user();

        if ($user) {
            if ($user->admin) {
                return view('newsletter', ['newsletters' => $newsletters, 'user' => $user, 'showForm' => true]);
            } else {
                return view('newsletter', ['newsletters' => $newsletters, 'user' => $user, 'showForm' => false]);
            }
        } else {
            return view('newsletter', ['newsletters' => $newsletters, 'user' => $user, 'showForm' => false]);
        }
    }

    public function create()
    {
        return view('newsletter.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->admin) {
                $newsletter = new Newsletter();
                $newsletter->title = $request->input('title');
                $newsletter->body = $request->input('text');
                $newsletter->save();
                return redirect()->route('newsletter');
            } else {
                return redirect()->route('newsletter');
            }
        } else {
            return redirect()->route('newsletter');
        }
    }

    public function subscribe(Request $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
        return redirect()->route('newsletter');
    }

    public function show($id)
    {
        $newsletter = Newsletter::find($id);
        return view('newsletter.show', ['newsletter' => $newsletter]);
    }

    public function edit($id)
    {
        $newsletter = Newsletter::find($id);
        return view('newsletter_edit', ['newsletter' => $newsletter]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->admin) {
                $newsletter = Newsletter::find($id);
                $newsletter->title = $request->input('title');
                $newsletter->body = $request->input('text');
                $newsletter->save();
                return redirect()->route('newsletter');
            } else {
                return redirect()->route('newsletter');
            }
        } else {
            return redirect()->route('newsletter');
        }
    }

    public function sendNewsletter(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'message'    => 'required',
            'subject'    => 'required'
        ]);

        if($user)
        {
            if($user->admin)
            {
                foreach(Newsletter::all() as $users)
                {
                    mail($users->mail, $request['subject'], $request['message']);
                }
            }
        }
    }

    public function destroy($id)
    {
        $user = Auth::user();
        if ($user) {
            if ($user->admin) {
                $newsletter = Newsletter::findOrFail($id);
                $newsletter->delete();
                return redirect()->route('newsletter')->with('success', 'Newsletter successfully deleted.');
            } else {
                return redirect()->route('newsletter')->with('error', 'You do not have permission to delete newsletters.');
            }
        } else {
            return redirect()->route('newsletter')->with('error', 'You must be logged in to delete newsletters.');
        }
    }
}
