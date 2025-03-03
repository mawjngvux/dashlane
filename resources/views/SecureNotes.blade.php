@extends('layout.app')

@section('title', 'Secure Notes')

@section('content')
<div class="flex flex-col items-center justify-center h-96 rounded-lg">
    <i class="fa-solid fa-sticky-note text-6xl text-gray-400 mb-6"></i>
    <h2 class="text-xl font-semibold mb-2">Keep your notes secure</h2>
    <p class="text-gray-600 mb-4">Store important notes safely.</p>
    <div class="flex gap-4">
        <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
            <i class="fa-solid fa-file-import"></i> Import notes
        </button>
        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
            <i class="fa-solid fa-plus"></i> Add note
        </button>
    </div>
</div>
@endsection
