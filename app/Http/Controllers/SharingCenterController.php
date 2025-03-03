<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharingCenterController extends Controller
{
    function showSharingCenter(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.SharingCenter', ['email' => $email, 'name' => $name]);
    }
}
