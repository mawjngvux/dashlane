@extends('layout.app')

@section('title', 'VPN')

@section('content')
<div class="flex flex-col items-center justify-center h-[70vh] text-center space-y-4">
    <i class="fa-solid fa-shield text-teal-600 text-7xl"></i>

    <h1 class="text-2xl font-semibold text-gray-900">Secure your connection</h1>
    <p class="text-gray-600 max-w-md">
        Use Dashlane’s VPN to keep your online activity private and secure, especially on public Wi-Fi.
    </p>

    <div class="mt-6 bg-white shadow border border-gray-200 p-4 rounded-lg flex items-center justify-between w-[90%] max-w-md">
        <div class="text-left">
            <p class="font-semibold text-gray-900">Upgrade your plan</p>
            <p class="text-gray-600 text-sm">Get unlimited access to our VPN with a Premium plan.</p>
        </div>
        <a href="https://www.dashlane.com/plans" target="_blank" class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 flex items-center gap-2">
            See Plans →
        </a>
    </div>
</div>
@endsection
