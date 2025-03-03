@extends('layouts.app')

@section('title', 'Dark Web Monitoring')

@section('content')
<div class="flex flex-col items-center justify-center h-[70vh] text-center space-y-4">
    <i class="fa-solid fa-user-shield text-teal-600 text-7xl"></i>

    <h1 class="text-2xl font-semibold text-gray-900">Protect your accounts</h1>
    <p class="text-gray-600 max-w-md">
        Dark Web Monitoring keeps track of your email addresses and alerts you if they appear in data breaches.
    </p>

    <div class="mt-6 bg-white shadow border border-gray-200 p-4 rounded-lg flex items-center justify-between w-[90%] max-w-md">
        <div class="text-left">
            <p class="font-semibold text-gray-900">Add your email</p>
            <p class="text-gray-600 text-sm">Add email addresses to start monitoring them for breaches.</p>
        </div>
        <a href="{{ route('showPersonalInfo') }}" class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 flex items-center gap-2">
            Go to Personal Info →
        </a>
    </div>
</div>
@endsection
