<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInforController extends Controller
{
    function showPersonalInfor(){
        $title= "Personal Information";
        $email = Auth::user()->email;
        return view('PersonalInfor', ['email' => $email, 'title' => $title]);
    }
}
