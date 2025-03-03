<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecureNotesController extends Controller
{
    function showSecureNotes(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.SecureNotes', ['email' => $email, 'name' => $name]);
    }
}
