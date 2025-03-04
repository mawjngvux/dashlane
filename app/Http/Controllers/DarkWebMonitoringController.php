<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarkWebMonitoringController extends Controller
{
    function showDarkWebMonitoring(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.DarkwebMonitoring', ['email' => $email, 'name' => $name]);
    }
}
