<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordHealthController extends Controller
{
    function showPasswordHealth(){
        $title= "Password Health";
        $email = Auth::user()->email;
        return view('PasswordHealth', ['email' => $email, 'title' => $title]);
    }
}
