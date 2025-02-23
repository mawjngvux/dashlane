<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialsController extends Controller
{
    function showCredentials(){
        $title= "Logins";
        $email = Auth::user()->email;
        return view('Credentials', ['email' => $email, 'title' => $title]);
    }
}
