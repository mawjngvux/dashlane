<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasskeysController extends Controller
{
    function showPasskeys(){
        $title= "Passkeys";
        $email = Auth::user()->email;
        return view('Passkeys', ['email' => $email, 'title' => $title]);
    }
}
