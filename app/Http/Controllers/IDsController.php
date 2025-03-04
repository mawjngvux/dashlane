<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IDsController extends Controller
{
    function showIDs(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.Ids', ['email' => $email, 'name' => $name]);
    }
}
