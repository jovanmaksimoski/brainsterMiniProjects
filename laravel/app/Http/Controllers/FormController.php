<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|max:15',
            'lastname' => 'required|alpha|max:25',
            'email' => 'required|email',
        ]);

        session([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        return redirect()->route('info');
    }

    public function clearSession()
    {
        session()->forget(['name', 'lastname', 'email']);
        return redirect()->route('home');
    }

}
