<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IDSController extends Controller
{
    function showIDS(){
        $title= "Intrusion Detection System";
        $email = Auth::user()->email;
        return view('IDS', ['email' => $email, 'title' => $title]);
    }
}
