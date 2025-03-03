@extends('layouts.app')

@section('title', 'IDs')

@section('content')
<div class="flex flex-col items-center justify-center h-[60vh] text-center">
    <i class="fa-solid fa-id-card text-6xl text-gray-400 mb-6"></i>

    <h1 class="text-xl font-semibold text-gray-800">Store IDs securely</h1>
    <p class="text-gray-500 mt-1">Store your important identification documents here for easy and safe access.</p>

    <button onclick="openAddIdsForm()" class="mt-6 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 flex items-center gap-2">
        <span class="text-xl">+</span>
        Add ID
    </button>
</div>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addIdModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 border-l border-gray-300">
    <div class="flex flex-col h-full">
        
        {{-- Header --}}
        <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-id-card text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add an ID</h2>
            <button onclick="forceCloseAddIdForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        {{-- Form content --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50 overflow-y-auto">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">ID details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="ID Type" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Display Name (e.g., My Passport)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="ID Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Issue Date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Expiry Date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Upload ID</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddIdForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

<script>
    let isFormDirty = false;

    function openAddIdsForm() {
        const modal = document.getElementById('addIdModal');
        const backdrop = document.getElementById('backdrop');

        modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
        modal.classList.add('translate-x-0', 'opacity-100', 'visible');
        backdrop.classList.remove('opacity-0', 'invisible');
        backdrop.classList.add('opacity-100', 'visible');

        isFormDirty = false;

        document.querySelectorAll('#addIdModal input, #addIdModal textarea').forEach(input => {
            input.removeEventListener('input', markFormDirty);
            input.addEventListener('input', markFormDirty);
        });

        window.addEventListener('beforeunload', confirmExit);
    }

    function forceCloseAddIdForm() {
        const modal = document.getElementById('addIdModal');
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
