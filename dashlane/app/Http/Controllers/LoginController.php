<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('credential.login', ['title' => 'Login']);

    }

    public function login(Request $request) {
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended('/home');
        }
        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}
