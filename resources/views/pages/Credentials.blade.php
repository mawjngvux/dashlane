@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-100 p-4 border-r">
        <h2 class="text-lg font-semibold mb-4">Search Dashlane</h2>
        <input type="text" placeholder="Search" class="w-full mb-4 p-2 border rounded" />
        <nav class="space-y-2 text-gray-700">
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200 font-semibold">
                <i class="fa-solid fa-lock"></i> Logins
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-key"></i> Passkeys
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-credit-card"></i> Payments
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-note-sticky"></i> Secure Notes
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-user"></i> Personal Info
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-id-card"></i> IDs
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-share-nodes"></i> Sharing Center
            </a>
        </nav>

        <div class="mt-6">
            <p class="text-xs text-gray-500">SECURITY TOOLS</p>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-heart-pulse"></i> Password Health
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-mask"></i> Dark Web Monitoring
            </a>
            <a href="#" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-200">
                <i class="fa-solid fa-wifi"></i> VPN
            </a>
        </div>
    </aside>

    <!-- Main Content -->
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
</div>
@endsection        