<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin(){
        if (Auth::id() > 0) {
            return redirect()->route('showCredentials');
        }
        return view('Login');
    }

    function showRegister(){
        return view('Register');
    }

    function login(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('showCredentials')->with('success', 'Logged in successfully');
        }
        return back()->withErrors(['login' => 'Invalid email or password!'])->withInput();
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
