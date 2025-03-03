@extends('layouts.home')

@section('page-content')

@section('title', 'Payments')
@section('name', $name)
@section('email', $email) 

<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-credit-card text-6xl text-gray-400 mb-6"></i>
        <h2 class="text-xl font-semibold mb-2">Manage your payment methods</h2>
        <p class="text-gray-600 mb-4">Keep your cards and payment details secure.</p>
        <div class="flex gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
                <i class="fa-solid fa-file-import"></i> Import payments
            </button>
            <button onclick="openAddPaymentsForm()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                <i class="fa-solid fa-plus"></i> Add payment method
            </button>
        </div>
    </div>
</main>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal --}}
<div id="addPaymentModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-credit-card text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a payment method</h2>
            <button onclick="forceCloseAddPaymentsForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        {{-- Form content - Scrollable --}}
        <div class="flex-1 p-4 space-y-6 overflow-y-auto bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Payment details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Cardholder Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Card Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Expiry Date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="CVV" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <input type="text" placeholder="Billing Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Card type</h3>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="cardType" value="visa" class="text-teal-500">
                        <i class="fa-brands fa-cc-visa text-2xl text-blue-600"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="cardType" value="mastercard" class="text-teal-500">
                        <i class="fa-brands fa-cc-mastercard text-2xl text-red-600"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="cardType" value="amex" class="text-teal-500">
                        <i class="fa-brands fa-cc-amex text-2xl text-blue-400"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="cardType" value="discover" class="text-teal-500">
                        <i class="fa-brands fa-cc-discover text-2xl text-orange-500"></i>
                    </label>
                </div>
            </div>
        </div>

        {{-- Footer - Fixed at bottom --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddPaymentsForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>


<script>
    let isFormDirty = false;

    function openAddPaymentsForm() {
        const modal = document.getElementById('addPaymentModal');
        const backdrop = document.getElementById('backdrop');
        modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
        modal.classList.add('translate-x-0', 'opacity-100', 'visible');
        backdrop.classList.remove('invisible', 'opacity-0');
        backdrop.classList.add('visible', 'opacity-100');
        isFormDirty = false;

        document.querySelectorAll('#addPaymentModal input, #addPaymentModal textarea').forEach(input => {
            input.removeEventListener('input', markFormDirty);
            input.addEventListener('input', markFormDirty);
        });

        window.addEventListener('beforeunload', confirmExit);
    }

    function forceCloseAddPaymentsForm() {
        const modal = document.getElementById('addPaymentModal');
        const backdrop = document.getElementById('backdrop');
        backdrop.classList.add('opacity-0', 'invisible');
        modal.classList.add('translate-x-full', 'opacity-0', 'invisible');
        backdrop.classList.remove('visible', 'opacity-100');
        backdrop.classList.add('invisible', 'opacity-0');
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
        if (isFormDirty) {
            e.preventDefault();
            e.returnValue = '';
        }
    }
</script>
@endsection
