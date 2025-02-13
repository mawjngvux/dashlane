<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class passkeyscontroller extends Controller
{
    function showpasskeys(){
        $title = 'Passkeys';
        $email = Auth::user()->email;
        return view('passkeys', ['email' => $email, 'title' => $title]);
    }
}
