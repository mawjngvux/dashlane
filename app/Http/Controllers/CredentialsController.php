<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredentialsController extends Controller
{
    function showCredentials(){
        return view('pages.Credentials');
    }
}
