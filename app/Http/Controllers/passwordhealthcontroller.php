<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class passwordhealthcontroller extends Controller
{
    function showpasswordhealth(){
        $title = 'Password Health';
        $email = Auth::user()->email;
        return view('passwordhealth', ['email' => $email, 'title' => $title]);
    }
}
