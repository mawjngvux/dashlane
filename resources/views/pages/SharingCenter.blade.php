@extends('layouts.home')

@section('page-content')

@section('title', 'Sharing Center')
@section('name', $name)
@section('email', $email) 

<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-share text-6xl text-gray-400"></i>

        <h1 class="text-2xl font-semibold text-gray-900">Start sharing items</h1>
        <p class="text-gray-600 max-w-md">
            After you’ve added items, you can easily share them individually or in Collections, with your contacts.
        </p>

        <div class="mt-6 bg-white shadow border border-gray-200 p-4 rounded-lg flex items-center justify-between w-[90%] max-w-md">
            <div class="text-left">
                <p class="font-semibold text-gray-900">Add logins</p>
                <p class="text-gray-600 text-sm">You can add logins manually or import them all at once.</p>
            </div>
            <a href="{{ route('showCredentials') }}" class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 flex items-center gap-2">
                Go to Logins →
            </a>
        </div>
    </div>
</main>
@endsection
