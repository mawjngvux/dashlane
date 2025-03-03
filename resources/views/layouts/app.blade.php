<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex h-screen">
    <aside class="w-64 bg-gray-100 p-4 border-r">
        <h2 class="text-lg font-semibold mb-4">Search Dashlane</h2>
        <input type="text" placeholder="Search" autocomplete="off" class="w-full mb-4 p-2 border rounded" />
        <nav class="space-y-2 text-gray-700">
            <a href="{{ route('showCredentials') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showCredentials') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-lock"></i> Logins
            </a>
            <a href="{{ route('showPasskeys') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showPasskeys') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-key"></i> Passkeys
            </a>
            <a href="{{ route('showPayments') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showPayments') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-credit-card"></i> Payments
            </a>
            <a href="{{ route('showSecureNotes') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showSecureNotes') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-note-sticky"></i> Secure Notes
            </a>
            <a href="{{ route('showPersonalInfo') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showPersonalInfo') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-user"></i> Personal Info
            </a>
            <a href="{{ route('showIds') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showIds') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-id-card"></i> IDs
            </a>
            <a href="{{ route('showSharingCenter') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showSharingCenter') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-share-nodes"></i> Sharing Center
            </a>
        </nav>

        <div class="mt-6">
            <p class="text-xs text-gray-500">SECURITY TOOLS</p>
            <a href="{{ route('showPasswordHealth') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showPasswordHealth') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-heart-pulse"></i> Password Health
            </a>
            <a href="{{ route('showDarkwebMonitoring') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showDarkwebMonitoring') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-mask"></i> Dark Web Monitoring
            </a>
            <a href="{{ route('showVPN') }}" class="flex items-center gap-2 py-2 px-3 rounded {{ request()->routeIs('showVPN') ? 'bg-teal-500 text-white' : 'hover:bg-gray-200' }}">
                <i class="fa-solid fa-wifi"></i> VPN
            </a>
        </div>
    </aside>

    <main class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">@yield('title', 'Dashboard')</h1>
            <a href="{{ route('logout') }}">
                <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                    <i class="fa-solid fa-sign-out"></i> Logout
                </button>
            </a>
        </div>

        @yield('content')
    </main>
</div>

</body>
</html>
