<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VPNController extends Controller
{
    function showVPN(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.VPN', ['email' => $email, 'name' => $name]);
    }
}
