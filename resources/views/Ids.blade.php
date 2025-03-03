@extends('layout.app')

@section('title', 'IDs')

@section('content')
<div class="flex flex-col items-center justify-center h-[60vh] text-center">
    <i class="fa-solid fa-id-card text-6xl text-gray-400 mb-6"></i>

    <h1 class="text-xl font-semibold text-gray-800">Store IDs securely</h1>
    <p class="text-gray-500 mt-1">Store your important identification documents here for easy and safe access.</p>

    <button class="mt-6 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 flex items-center gap-2">
        <span class="text-xl">+</span>
        Add ID
    </button>
</div>
@endsection
