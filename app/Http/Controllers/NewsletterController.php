<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
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
                return view('newsletter', ['newsletter' => $newsletters, 'user' => $user, 'showForm' => true]);
            } else {
                return view('newsletter', ['newsletter' => $newsletters, 'user' => $user, 'showForm' => false]);
            }
        } else {
            return view('newsletter', ['newsletter' => $newsletters, 'user' => $user, 'showForm' => false]);
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
                $newsletter->text = $request->input('text');
                $newsletter->user_id = $user->id;
                $newsletter->save();
                return redirect()->route('newsletter');
            } else {
                return redirect()->route('newsletter');
            }
        } else {
            return redirect()->route('newsletter');
        }
    }

    public function show($id)
    {
        $newsletter = Newsletter::find($id);
        return view('newsletters.show', ['newsletter' => $newsletter]);
    }

    public function edit($id)
    {
        $newsletter = Newsletter::find($id);
        return view('newsletters.edit', ['newsletter' => $newsletter]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($user) {
            if ($user->admin) {
                $newsletter = Newsletter::find($id);
                $newsletter->title = $request->input('title');
                $newsletter->text = $request->input('text');
                $newsletter->save();
                return redirect()->route('newsletter');
            } else {
                return redirect()->route('newsletter');
            }
        } else {
            return redirect()->route('newsletter');
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
