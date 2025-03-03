<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasskeysController extends Controller
{
    function showPasskeys(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.Passkeys', ['email' => $email, 'name' => $name]);
    }
}
