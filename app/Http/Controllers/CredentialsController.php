<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredentialsController extends Controller
{
    function showCredentials(){
        return view('Credentials');
    }
    function showPasskey(){
        return view('Passkeys');
    }
    function showPayments(){
        return view('Payments');
    }
    function showSecureNotes(){
        return view('SecureNotes');
    }
    function showPersonalInfo(){
        return view('PersonalInfo');
    }
    function showIds(){
        return view('Ids');
    }
    function showSharingCenter(){
        return view('SharingCenter');
    }
    function showPasswordHealth(){
        return view('PasswordHealth');
    }
    function showDarkwebMonitoring(){
        return view('DarkwebMonitoring');
    }
    function showVPN(){
        return view('VPN');
    }
}
