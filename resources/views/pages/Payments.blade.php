@extends('layouts.home')

@section('page-content')

@section('title', 'Payments')
@section('name', $name)
@section('email', $email) 

{{-- Content page --}}
<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-credit-card text-6xl text-gray-400 mb-6"></i>
        <h2 class="text-xl font-semibold mb-2">Manage your payment methods</h2>
        <p class="text-gray-600 mb-4">Keep your cards and payment details secure.</p>
        <div class="flex gap-4">
            <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300"><i class="fa-solid fa-file-import"></i> Import payments</button>
            <button onclick="openAddPaymentsForm()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600"><i class="fa-solid fa-plus"></i> Add payment method</button>
        </div>
    </div>

    {{-- Display Saved Payments --}}
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Saved Payments</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Cardholder Name</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Card Number</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Expiry Date</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Billing Address</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 border-b">Card Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $payment->cardholder_name }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $payment->card_number }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $payment->expiry_date }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ $payment->billing_address }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700 border-b">{{ ucfirst($payment->card_type) }}</td>
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
<div id="addPaymentModal" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border-b flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center"><i class="fa-solid fa-credit-card text-gray-600"></i></div>
            <h2 class="text-lg font-semibold text-gray-800">Add a payment method</h2>
            <button onclick="forceCloseAddPaymentsForm()" class="ml-auto text-gray-500 hover:text-red-500"><i class="fa-solid fa-xmark text-xl"></i></button>
        </div>

        {{-- Form content - Scrollable --}}
        <form action="{{ route('Payments.store') }}" method="POST" class="flex-1 p-4 space-y-6 overflow-y-auto bg-gray-50">
            @csrf
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Payment details</h3>
                <div class="space-y-4">
                    <input type="text" id="cardholderName" name="cardholder_name" placeholder="Cardholder Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="text" id="cardNumber" name="card_number" placeholder="Card Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="text" id="securityCode" name="security_code" placeholder="Security Code" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="date" id="expiryDate" name="expiry_date" placeholder="Expiry Date" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="text" id="cvv" name="cvv" placeholder="CVV" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <input type="text" id="billingAddress" name="billing_address" placeholder="Billing Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500" required>
                    <textarea id="note" name="note" placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Card type</h3>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <input type="radio" id="cardTypeVisa" name="card_type" value="visa" class="text-teal-500" required><i class="fa-brands fa-cc-visa text-2xl text-blue-600"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" id="cardTypeMastercard" name="card_type" value="mastercard" class="text-teal-500" required><i class="fa-brands fa-cc-mastercard text-2xl text-red-600"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" id="cardTypeAmex" name="card_type" value="amex" class="text-teal-500" required><i class="fa-brands fa-cc-amex text-2xl text-blue-400"></i>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" id="cardTypeDiscover" name="card_type" value="discover" class="text-teal-500" required><i class="fa-brands fa-cc-discover text-2xl text-orange-500"></i>
                    </label>
                </div>
            </div>

            {{-- Footer - Fixed at bottom --}}
            <div class="p-4 border-t bg-white flex justify-end gap-2">
                <button type="button" onclick="forceCloseAddPaymentsForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
                <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
            </div>
        </form>
    </div>
</div>
<script src="js/Payments.js"></script>
@endsection