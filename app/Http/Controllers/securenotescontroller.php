<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class securenotescontroller extends Controller
{
    function showsecurenotes(){
        $title = 'Sercure Notes';
        $email = Auth::user()->email;
        return view('securenotes', ['email' => $email, 'title' => $title]);
    }
}
