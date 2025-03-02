@extends('layouts.app')

@section('content')
<div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
    <img src="{{asset('images/dashlane_logo.jfif')}}" alt="Dashlane Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">
</div>

<div class="w-1/4 flex flex-col justify-center px-10 py-6 relative">
    <div class="flex justify-end items-center space-x-2 absolute top-6 right-6">
        <p class="text-sm text-gray-600">Remember your password?</p>
        <a href="{{route('login')}}" class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition">Login</a>
    </div>

    <div class="w-full max-w-sm mx-auto space-y-6">
        <h2 class="text-2xl font-semibold mb-2">Forgot Password</h2>
        <p class="text-gray-600 text-sm mb-4">Enter your email to receive a verification code.</p>

        <form id="emailForm" class="space-y-4" method="POST" action="{{route('sendResetLink')}}">
            @csrf
            <label for="email" class="text-sm font-medium">Email</label>
            <input id="email" name="email" type="email" placeholder="Enter your email..." required 
                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition">Send Code</button>
        </form>
    </div>
</div>
@endsection