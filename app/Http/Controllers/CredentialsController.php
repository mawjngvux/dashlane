<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Password;

class CredentialsController extends Controller
{
    function showCredentials(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $passwords = Password::all();
        return view('pages.Credentials', ['email' => $email, 'name' => $name], ['passwords' => $passwords]);
    }

    function store(Request $request){
        $request->validate([
            'website'  => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'note'     => 'nullable|string',
        ]);

        Password::create([
            'user_id'  => Auth::id(), 
            'website'  => $request->website,
            'username' => $request->username,
            'password' => $request->password, 
        ]);

        return redirect()->back()->with('success', 'Login saved successfully!');

    }
}
