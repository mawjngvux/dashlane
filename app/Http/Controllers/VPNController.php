<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VPNController extends Controller
{
    function showVPN(){
        $title= "VPN";
        $email = Auth::user()->email;
        return view('VPN', ['email' => $email, 'title' => $title]);
    }
}
