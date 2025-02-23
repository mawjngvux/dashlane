<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecureNotesController extends Controller
{
    function showSecureNotes(){
        $title= "Secure Notes";
        $email = Auth::user()->email;
        return view('SecureNotes', ['email' => $email, 'title' => $title]);
    }
}
