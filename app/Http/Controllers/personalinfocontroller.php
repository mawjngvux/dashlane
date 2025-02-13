<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class personalinfocontroller extends Controller
{
    function showpersonalinfo(){
        $title = 'Personal Info';
        $email = Auth::user()->email;
        return view('personalinfo', ['email' => $email, 'title' => $title]);
    }
}
