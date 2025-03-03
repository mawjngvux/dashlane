@extends('layouts.home')

@section('page-content')

@section('title', 'Passkeys')
@section('name', $name)
@section('email', $email)

<div class="flex flex-col items-center justify-center h-96 rounded-lg ">
    <i class="fa-solid fa-key text-6xl text-gray-400 mb-6"></i>
    <h2 class="text-xl font-semibold mb-2">Manage your passkeys</h2>
    <p class="text-gray-600 mb-4">Store and use your passkeys securely.</p>
    <div class="flex gap-4">
        <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
            <i class="fa-solid fa-file-import"></i> Import passkeys
        </button>
        <button onclick="openAddPasskeyForm()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
            <i class="fa-solid fa-plus"></i> Add passkey
        </button>
    </div>
</div>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addPasskeyModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="flex flex-col h-full">
    {{-- Header --}}
    <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-key text-gray-600"></i>
        </div>
        <h2 class="text-lg font-semibold text-gray-800">Add a passkey</h2>
        <button onclick="forceCloseAddPasskeyForm()" class="ml-auto text-gray-500 hover:text-red-500">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>
        
        {{-- Form --}}
            
        <div class="flex-1 p-4 space-y-6 bg-gray-50 overflow-y-auto">
    <div>
        <h3 class="text-sm font-semibold text-gray-700 mb-2">Passkey details</h3>
        <div class="space-y-4">
            <input type="text" placeholder="Website" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

            <input type="text" placeholder="Display Name (e.g., My Google Account)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

            <input type="text" placeholder="Username or Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

            <input type="text" placeholder="Device Info (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

            <input type="date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

            <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
        </div>
    </div>

    <div>
        <h3 class="text-sm font-semibold text-gray-700 mb-2">Item organization</h3>
        <input type="text" placeholder="Item name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
        <button type="button" class="mt-2 text-teal-600 text-sm hover:underline">
            + Add a collection
        </button>
    </div>

    
    <div>
        <h3 class="text-sm font-semibold text-gray-700 mb-2">Preferences</h3>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500">
            <span class="text-sm text-gray-700">Require biometric authentication when using this passkey</span>
        </label>
    </div>
</div>

            
    {{-- Footer (nút Cancel & Save) --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddPasskeyForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>
<script>
let isFormDirty = false;

function openAddPasskeyForm() {
    const modal = document.getElementById('addPasskeyModal');
    const backdrop = document.getElementById('backdrop');

    modal.classList.remove('invisible', 'translate-x-full', 'opacity-0');
    modal.classList.add('opacity-100');

    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('opacity-100');

    isFormDirty = false;

    document.querySelectorAll('#addPasskeyModal input, #addPasskeyModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function markFormDirty() {
    isFormDirty = true;
}

function forceCloseAddPasskeyForm() {
    const modal = document.getElementById('addPasskeyModal');
    const backdrop = document.getElementById('backdrop');

    modal.classList.add('translate-x-full', 'opacity-0');
    backdrop.classList.add('opacity-0');

    setTimeout(() => {
        modal.classList.add('invisible');
        backdrop.classList.add('invisible');
    }, 500);

    isFormDirty = false;
    window.removeEventListener('beforeunload', confirmExit);
}

function closeAddPasskeyForm() {
    if (isFormDirty) {
        if (confirm('You have unsaved changes. Are you sure you want to leave?')) {
            forceCloseAddPasskeyForm();
        }
    } else {
        forceCloseAddPasskeyForm();
    }
}

    function markFormDirty() {
    isFormDirty = true;
    }
function confirmExit(e) {
    if (!isFormDirty) return;

    e.preventDefault();
    e.returnValue = '';
}

</script>
@endsection
