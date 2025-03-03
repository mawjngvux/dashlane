@extends('layout.app')

@section('title', 'Payments')

@section('content')
<div class="flex flex-col items-center justify-center h-96 rounded-lg">
    <i class="fa-solid fa-credit-card text-6xl text-gray-400 mb-6"></i>
    <h2 class="text-xl font-semibold mb-2">Manage your payment methods</h2>
    <p class="text-gray-600 mb-4">Keep your cards and payment details secure.</p>
    <div class="flex gap-4">
        <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
            <i class="fa-solid fa-file-import"></i> Import payments
        </button>
        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
            <i class="fa-solid fa-plus"></i> Add payment method
        </button>
    </div>
</div>

{{-- Backdrop --}}
<d
@endsection
