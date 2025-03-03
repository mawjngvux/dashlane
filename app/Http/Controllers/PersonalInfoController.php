<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    function showPersonalInfo(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.PersonalInfo', ['email' => $email, 'name' => $name]);
    }
}
