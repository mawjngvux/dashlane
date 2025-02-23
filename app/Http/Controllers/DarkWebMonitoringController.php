<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarkWebMonitoringController extends Controller
{
    function showDarkWebMonitoring(){
        $title= "Dark Web Monitoring";
        $email = Auth::user()->email;
        return view('DarkWebMonitoring', ['email' => $email, 'title' => $title]);
    }
}
