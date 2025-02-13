<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class idscontroller extends Controller
{
    function showids(){
        $title = 'IDs';
        $email = Auth::user()->email;
        return view('ids', ['email' => $email, 'title' => $title]);
    }
}
