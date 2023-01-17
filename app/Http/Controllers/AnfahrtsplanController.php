<?php

namespace App\Http\Controllers;

use App\Models\Anfahrtsplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnfahrtsplanController extends Controller
{
    public function show()
    {
        $texts = Anfahrtsplan::first();
        $user = Auth::user();

        if($user)
        {
            if($user->admin)
            {
                return view('anfahrtsplan', ['texts' => $texts, 'isAdmin' => true]);
            }
        }
        
        return view('anfahrtsplan', ['texts' => $texts, 'isAdmin' => false]);
        
    }

    public function edit()
    {
        if(!Auth::user()->admin) {
            return redirect()->back()->withErrors(['You do not have permission to access this page.']);
        }

        $texts = Anfahrtsplan::first();
        return view('anfahrtsplan_edit', compact('texts'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if($user)
        {
            if($user->admin) {
                $texts = Anfahrtsplan::first();
                $texts->addressOffice = $request->addressOffice;
                $texts->driveToOffice = $request->driveToOffice;
                $texts->publicTransportToOffice = $request->publicTransportToOffice;
                $texts->addressWorkshop = $request->addressWorkshop;
                $texts->driveToWorkshop = $request->driveToWorkshop;
                $texts->publicTransportToWorkshop = $request->publicTransportToWorkshop;
                $texts->save();
    
                return view('anfahrtsplan', ['texts' => $texts, 'isAdmin' => true]);
            }
        }

        return redirect()->back()->withErrors(['You do not have permission to access this page.']);
    }
}
