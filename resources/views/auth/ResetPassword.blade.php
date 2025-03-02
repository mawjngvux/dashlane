@extends('layouts.app')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg m-auto">
    <h2 class="text-2xl font-bold text-center">Set New Password</h2>
    <form action="{{ route('resetPassword') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">New Password</label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none">
            @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none">
        </div>
        <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded hover:bg-teal-700">Reset Password</button>
    </form>
</div>
@endsection