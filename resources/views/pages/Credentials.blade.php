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
</main>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addLoginModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-globe text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a login</h2>
            <button onclick="forceCloseAddLoginForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">

            {{-- Login Details --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Login details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Website" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" id="website">
                    <input type="text" placeholder="Username" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" id="username">
                    <div class="relative">
                        <input type="password" placeholder="Password" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" id="password">
                        <button class="absolute inset-y-0 right-0 px-3 text-gray-600">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <textarea placeholder="Note" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            {{-- Item Organization --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Item organization</h3>
                <input type="text" placeholder="Item name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                <button class="mt-2 text-teal-600 text-sm hover:underline">
                    + Add a collection
                </button>
            </div>

            {{-- Preferences (Nếu muốn thêm gì ở đây) --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Preferences</h3>
                <p class="text-sm text-gray-500">Preferences section</p>
            </div>

        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddLoginForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>

    </div>
</div>

<script>
    let isFormDirty = false;

    function showAddLoginForm() {
        document.getElementById('addLoginModal').classList.remove('invisible', 'translate-x-full', 'opacity-0');
        document.getElementById('backdrop').classList.remove('invisible', 'opacity-0');

        isFormDirty = false;

        document.querySelectorAll('#addLoginModal input, #addLoginModal textarea').forEach(input => {
            input.removeEventListener('input', markFormDirty); 
            input.addEventListener('input', markFormDirty);
        });

        window.addEventListener('beforeunload', handleBeforeUnload);
    }

    function markFormDirty() {
        isFormDirty = true;
    }

    function forceCloseAddLoginForm() {
        document.getElementById('addLoginModal').classList.add('translate-x-full', 'opacity-0');
        document.getElementById('backdrop').classList.add('opacity-0');
        setTimeout(() => {
            document.getElementById('addLoginModal').classList.add('invisible');
            document.getElementById('backdrop').classList.add('invisible');
        }, 500);
        hideDiscardConfirm();

        isFormDirty = false;

        window.removeEventListener('beforeunload', handleBeforeUnload);

        document.querySelectorAll('#addLoginModal input, #addLoginModal textarea').forEach(input => {
            input.removeEventListener('input', markFormDirty);
        });
        }

        function handleBeforeUnload(event) {
        if (isFormDirty) {
            event.preventDefault();
            event.returnValue = '';
        }
    }

    function hideDiscardConfirm() {
        document.getElementById('discardConfirm').classList.add('hidden');
    }

    window.removeEventListener('beforeunload', handleBeforeUnload);


</script>
@endsection