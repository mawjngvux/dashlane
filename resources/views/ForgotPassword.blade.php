<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Dashlane</title>
    <link rel="icon" href="https://cdn.dashlane.com/logo/dashlane-icon.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
        <img src="https://cdn.dashlane.com/logo/dashlane-icon.png" alt="Dashlane Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">
    </div>

    <div class="w-1/4 flex flex-col justify-center px-10 py-6 relative">
        <div class="w-full max-w-sm mx-auto space-y-6">
            <h2 class="text-2xl font-semibold mb-2">Forgot Password</h2>
            <p class="text-gray-600 text-sm mb-4">Enter your email to receive a verification code.</p>

            <form id="emailForm" class="space-y-4" method="POST" action="{{route('sendResetLink')}}">
                @csrf
                <label for="email" class="text-sm font-medium">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email..." required 
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition">Send Code</button>
            </form>
        </div>
    </div>
</body>
</html>