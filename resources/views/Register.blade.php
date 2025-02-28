<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dashlane Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
        <img src="{{asset('images/Dashlane_Lockup_Green_1200X628-01.png')}}" alt="Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">
        <div class="mt-24">
            <h1 class="text-4xl font-bold mb-4">Welcome to Dashlane on the web</h1>
            <p class="text-gray-600">Access your logins and personal data in the web app — quickly and securely.</p>
        </div>
    </div>

    <div class="w-1/4 flex flex-col justify-center px-10">
        <div id="email-section">
            <h2 class="text-2xl font-semibold mb-2">Start using Dashlane for free</h2>
            <p class="text-gray-600 text-sm mb-4">Enter the email you'd like to associate with your Dashlane account.</p>
            <form action="{{route('register')}}" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-4"> 
                        <label for="exampleInputEmail1" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
                        <input type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp">
                        <p class="text-gray-600 text-xs italic mt-2">We'll never share your email with anyone else.</p>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputName1" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="input" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputName1">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputConfirmPassword1" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputConfirmPassword1">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputPassword1">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>