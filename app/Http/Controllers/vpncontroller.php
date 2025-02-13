<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vpncontroller extends Controller
{
    function showvpn(){
        $title = 'VPN';
        $email = Auth::user()->email;
        return view('vpn', ['email' => $email, 'title' => $title]);
    }
}
