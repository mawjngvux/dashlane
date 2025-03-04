<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class PaymentsController extends Controller
{
    function showPayments(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $payments = Payment::all();
        return view('pages.Payments', ['email' => $email, 'name' => $name, 'payments' => $payments]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'cardholder_name' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
            'security_code' => 'required|string|max:255',
            'expiry_date' => 'required|date',
            'cvv' => 'required|string|max:255',
            'billing_address' => 'required|string|max:255',
            'note' => 'nullable|string',
            'card_type' => 'required|string|max:255',
        ]);

        Payment::create($request->all());

        return redirect()->back()->with('success', 'Payment method added successfully.');
    }
}
