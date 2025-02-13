<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentscontroller extends Controller
{
    function showpayments(){
        $title = 'Payments';
        $email = Auth::user()->email;
        return view('payments', ['email' => $email, 'title' => $title]);
    }
}
