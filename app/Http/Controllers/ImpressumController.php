<?php

namespace App\Http\Controllers;

use App\Models\Impressum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpressumController extends Controller
{
    public function show()
    {
        $texts = Impressum::first();
        $user = Auth::user();

        if($user)
        {
            if($user->admin)
            {
                return view('impressum', ['texts' => $texts, 'isAdmin' => true]);
            }
        }

        return view('impressum', ['texts' => $texts, 'isAdmin' => false]);

    }

    public function edit()
    {
        if(!Auth::user()->admin) {
            return redirect()->back()->withErrors(['You do not have permission to access this page.']);
        }

        $texts = Impressum::first();
        return view('impressum_edit', compact('texts'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if($user)
        {
            if($user->admin) {
                $texts = Impressum::first();
                $texts->firmenanschrift = $request->firmenanschrift;
                $texts->unternehmensgegenstand = $request->unternehmensgegenstand;
                $texts->UIDNummer = $request->UIDNummer;
                $texts->GLN = $request->GLN;
                $texts->GISA = $request->GISA;
                $texts->telefonnummer = $request->telefonnummer;
                $texts->fax = $request->fax;
                $texts->email = $request->email;
                $texts->adresse = $request->adresse;
                $texts->save();

                return view('impressum', ['texts' => $texts, 'isAdmin' => true]);
            }
        }

        return redirect()->back()->withErrors(['You do not have permission to access this page.']);
    }
}