<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharingCenterController extends Controller
{
    function showSharingCenter(){
        $title= "Sharing Center";
        $email = Auth::user()->email;
        return view('SharingCenter', ['email' => $email, 'title' => $title]);
    }
}
