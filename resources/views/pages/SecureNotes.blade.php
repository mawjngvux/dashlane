@extends('layouts.home')

@section('page-content')

@section('title', 'Secure Notes')
@section('name', $name)
@section('email', $email) 

<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-sticky-note text-6xl text-gray-400 mb-6"></i>
        <h2 class="text-xl font-semibold mb-2">Keep your notes secure</h2>
        <p class="text-gray-600 mb-4">Store important notes safely.</p>
        <div class="flex gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
                <i class="fa-solid fa-file-import"></i> Import notes
            </button>
            <button onclick="openAddNotesForm()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                <i class="fa-solid fa-plus"></i> Add note
            </button>
        </div>
    </div>
</main>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addNoteModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 border-l border-gray-300 flex flex-col">
    
    {{-- Header --}}
    <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-sticky-note text-gray-600"></i>
        </div>
        <h2 class="text-lg font-semibold text-gray-800">Add a note</h2>
        <button onclick="forceCloseAddNoteForm()" class="ml-auto text-gray-500 hover:text-red-500">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    {{-- Form content (phần body cuộn được nếu dài) --}}
    <div class="flex-1 overflow-y-auto p-4 space-y-6 bg-gray-50">
        <div>
            <h3 class="text-sm font-semibold text-gray-700 mb-2">Note details</h3>
            <div class="space-y-4">
                <input type="text" placeholder="Title" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                <textarea placeholder="Note content" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500 h-32"></textarea>
            </div>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-gray-700 mb-2">Additional details</h3>
            <div class="space-y-4">
                <input type="text" placeholder="Category" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                <input type="text" placeholder="Tags (comma-separated)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
            <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
        </div>

        <div>
            <h3 class="text-sm font-semibold text-gray-700 mb-2">Reminder</h3>
            <div class="space-y-4">
                <input type="date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                <input type="time" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>
    </div>

    {{-- Footer (luôn cố định dưới cùng) --}}
    <div class="p-4 border-t bg-white flex justify-end gap-2">
        <button onclick="forceCloseAddNoteForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
    </div>

</div>

    </div>
</div>

<script src="js/SecureNotes.js"></script>
@endsection
