<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class credentialscontroller extends Controller
{
    function showcredentials(){
        $title = 'Logins';
        $email = Auth::user()->email;
        return view('credentials', ['email' => $email, 'title' => $title]);
    }
}
