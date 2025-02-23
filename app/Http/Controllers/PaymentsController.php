<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    function showPayments(){
        $title= "Payments";
        $email = Auth::user()->email;
        return view('Payments', ['email' => $email, 'title' => $title]);
    }    
}