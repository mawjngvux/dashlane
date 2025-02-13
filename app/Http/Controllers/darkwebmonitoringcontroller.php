<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class darkwebmonitoringcontroller extends Controller
{
    function showdarkwebmonitoring(){
        $title = 'Dark Web Monitoring';
        $email = Auth::user()->email;
        return view('darkwebmonitoring', ['email' => $email, 'title' => $title]);
    }
}
