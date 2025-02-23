@extends('layout.app')

@section('content')
<div class="w-full h-screen flex">
  
  <div class="w-full md:w-3/4 bg-primary text-slate-900 flex flex-col justify-start items-start pt-6 md:pt-4 lg:pt-2 px-10">
    <img src="https://placehold.co/120x120" alt="Logo" class="mb-6 rounded-full shadow-lg">
    <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-left mt-60">Welcome to Dashlane Style</h1>
    <p class="text-base md:text-lg lg:text-xl max-w-md text-left mt-5">Securely manage your account with ease and efficiency.</p>
  </div>

 
  <div class="w-full md:w-1/3 flex justify-center items-center bg-gray-100">
    <div class="w-full max-w-md bg-gray-100 rounded-xl p-8">
      <h2 class="text-center text-2xl font-semibold text-dark mb-6">Sign in to your account</h2>

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
          <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
          <input type="email" id="email" name="email" required
                 class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none placeholder-gray-400"
                 placeholder="Enter your email">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
          <input type="password" id="password" name="password" required
                 class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none placeholder-gray-400"
                 placeholder="Enter your password">
        </div>

        <div class="flex justify-between items-center">
          <label class="flex items-center">
            <input type="checkbox" class="mr-2 rounded border-gray-300">
            <span class="text-sm text-gray-600">Remember me</span>
          </label>
          <a href="#" class="text-sm text-primary font-medium hover:underline">Forgot your password?</a>
        </div>

        <button type="submit"
                class="w-full bg-primary text-white py-3 rounded-lg font-medium text-lg hover:bg-accent transition">
          Sign in
        </button>
      </form>

      <p class="text-center text-sm text-gray-600 mt-6">
        Don’t have an account?
        <a href="#" class="text-primary font-medium hover:underline">Sign up</a>
      </p>
    </div>
  </div>
</div>
@endsection
