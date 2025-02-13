<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sharingcentercontroller extends Controller
{
    function showsharingcenter(){
        $title = 'Sharing Center';
        $email = Auth::user()->email;
        return view('sharingcenter', ['email' => $email, 'title' => $title]);
    }
}
