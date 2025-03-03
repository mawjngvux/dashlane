<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordHealthController extends Controller
{
    function showPasswordHealth(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.PasswordHealth', ['email' => $email, 'name' => $name]);
    }
}
