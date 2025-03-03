<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    function showPayments(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.Payments', ['email' => $email, 'name' => $name]);
    }
}
