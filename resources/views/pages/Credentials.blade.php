@extends('layouts.app')

@section('content')
@include('components.Sidebar')  
<main class="flex-1 p-6 bg-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Logins</h1>
        <a href="{{route('logout')}}"><button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600"><i class="fa-solid fa-sign-out-alt"></i> Logout</button></a>
    </div>

    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <img src="https://via.placeholder.com/200" alt="Illustration" class="mb-6" />
        <h2 class="text-xl font-semibold mb-2">Start adding logins</h2>
        <p class="text-gray-600 mb-4">Manage your logins securely in one place.</p>
        <div class="flex gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
                <i class="fa-solid fa-file-import"></i> Import logins
            </button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                <i class="fa-solid fa-plus"></i> Add login
            </button>
        </div>
    </div>
</main>
@endsection        