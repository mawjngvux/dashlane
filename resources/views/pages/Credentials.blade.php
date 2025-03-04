@extends('layouts.home')

@section('page-content')

@section('title', 'Logins')
@section('name', $name)
@section('email', $email) 

<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-lock text-6xl text-gray-400 mb-6"></i>
        <h2 class="text-xl font-semibold mb-2">Start adding logins</h2>
        <p class="text-gray-600 mb-4">Manage your logins securely in one place.</p>
        <div class="flex gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300"><i class="fa-solid fa-file-import"></i> Import logins</button>
            <button onclick="showAddLoginForm()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600"><i class="fa-solid fa-plus"></i> Add login</button>
        </div>
    </div>

    {{-- Display Saved Logins --}}
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Saved Logins</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Website</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Username</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Note</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($passwords as $password)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $password->website }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $password->username }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $password->note }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addLoginModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center"><i class="fa-solid fa-globe text-gray-600"></i></div>
            <h2 class="text-lg font-semibold text-gray-800">Add a login</h2>
            <button onclick="forceCloseAddLoginForm()" class="ml-auto text-gray-500 hover:text-red-500"><i class="fa-solid fa-xmark text-xl"></i></button>
        </div>

        {{-- Form --}}
        <form action="{{ route('Credentials.store') }}" method="POST" class="flex-1 p-4 space-y-6 bg-gray-50">
            @csrf

            {{-- Login Details --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Login details</h3>
                <div class="space-y-4">
                    <input type="text" name="website" placeholder="Website" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <div class="relative">
                        <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                        <button type="button" class="absolute inset-y-0 right-0 px-3 text-gray-600">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <textarea name="note" placeholder="Note" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            {{-- Item Organization --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Item organization</h3>
                <input type="text" name="item_name" placeholder="Item name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                <button type="button" class="mt-2 text-teal-600 text-sm hover:underline">
                    + Add a collection
                </button>
            </div>

            {{-- Preferences --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Preferences</h3>
                <p class="text-sm text-gray-500">Preferences section</p>
            </div>

            {{-- Footer --}}
            <div class="p-4 border-t bg-white flex justify-end gap-2">
                <button type="button" onclick="forceCloseAddLoginForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
                <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
            </div>
        </form>
    </div>
</div>

<script src="js/Credentials.js"></script>
@endsection