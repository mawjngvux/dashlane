@extends('layouts.app')

@section('title', 'Password Health')

@section('content')
<div class="p-6 rounded-lg">

    <div class="grid grid-cols-3 gap-4">
        <!-- Score Section -->
        <div class="col-span-2 bg-white p-4 rounded-lg shadow">
            <div class="flex items-center gap-6">
                <div class="w-24 h-24 rounded-full border-4 border-gray-300 flex items-center justify-center text-2xl font-semibold text-gray-600">
                    --
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Total</span>
                        <span class="font-medium">0</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Compromised</span>
                        <span class="text-red-500 font-medium">0</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Reused</span>
                        <span class="text-orange-500 font-medium">0</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Weak</span>
                        <span class="text-yellow-500 font-medium">0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips Section -->
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-semibold mb-2">DASHLANE TIPS</h3>
            <p class="text-sm text-gray-600 mb-4">Store 5 logins to see your score. Once you store at least 5 logins, you'll see your total Password Health Score and a breakdown of the logins that may need your attention.</p>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                Add logins
            </button>
        </div>
    </div>

    <!-- At-risk passwords -->
    <div class="mt-6 bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">AT-RISK PASSWORDS</h3>
            <div class="flex space-x-2">
                <button class="text-sm bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">All</button>
                <button class="text-sm bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Compromised</button>
                <button class="text-sm bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Weak</button>
                <button class="text-sm bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Reused</button>
                <button class="text-sm bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Excluded</button>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center h-48 text-gray-500">
            <i class="fa-solid fa-lock text-3xl mb-2"></i>
            <p class="text-center">Any logins at risk of being compromised will appear here, along with our tips on keeping your accounts safe.</p>
        </div>
    </div>
</div>
@endsection
