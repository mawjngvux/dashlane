<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashlane</title>
    <link rel="icon" href="{{asset('images/Dashlane_Lockup_Green_1200X628-01.png')}}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
        <img src="{{asset('images/Dashlane_Lockup_Green_1200X628-01.png')}}" alt="Dashlane Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800 mt-20">Welcome to Dashlane on the web</h1>
        <p class="text-lg text-gray-600 mt-4">Access your account securely and easily.</p>
    </div>

    <div class="w-1/4 flex flex-col justify-center px-10 py-6 relative">
        <div class="flex justify-end items-center space-x-2 absolute top-6 right-6">
            <p class="text-sm text-gray-600">Don't have an account?</p>
            <a href="{{route('showRegister')}}" class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition">Register</a>
        </div>

        <div id="login-section" class="w-full max-w-sm mx-auto space-y-4 mt-10">
            <h2 class="text-3xl font-semibold mb-2 text-gray-800">Sign in to Dashlane</h2>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{route('login')}}" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
                        <input type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputEmail1" value="{{ old('email') }}" aria-describedby="emailHelp">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputPassword1">
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-600 mb-2">
                        <span>Forgot your password?</span>
                        <a href="{{route('forgot')}}" class="text-teal-600 hover:underline">Reset it here</a>
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" name="remember" id="rememberMe" class="mr-2 leading-tight" {{ old('remember') ? 'checked' : '' }}>
                        <label for="rememberMe" class="text-sm text-gray-700">Remember me?</label>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>