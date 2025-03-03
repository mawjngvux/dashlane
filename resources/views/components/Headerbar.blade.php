<main class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6 relative">
        <h1 class="text-2xl font-bold">@yield('title')</h1>

        <div class="flex items-center space-x-4">
            <!-- Notification Bell -->
            <div class="relative">
                <button id="notificationBell" class="bg-gray-200 p-2 rounded-full hover:bg-gray-300 relative">
                    <i class="fa-solid fa-bell text-gray-700"></i>
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">3</span>
                </button>
                <div id="notificationDropdown" class="absolute right-0 mt-2 w-64 bg-white border rounded-lg shadow-lg hidden">
                    <div class="p-4 border-b font-semibold text-gray-900">Notifications</div>
                    <div class="p-4 text-gray-700">No new notifications</div>
                </div>
            </div>
            
            <!-- Account Dropdown -->
            <div class="relative">
                <button id="accountDropdown" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                    <span>My account</span>
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </button>
                
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-64 bg-white border rounded-lg shadow-lg hidden">
                    <div class="p-4 border-b">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-teal-500 text-white flex items-center justify-center rounded-full text-lg font-bold">@yield('name')</div>
                            <div>
                                <p class="text-gray-700 text-sm">LOGIN EMAIL</p>
                                <p class="text-gray-900 font-semibold text-xs">@yield('email')</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block px-4 py-3 hover:bg-gray-100"><i class="fa-solid fa-cog mr-2"></i>Settings</a>
                    <a href="{{route('logout')}}" class="block px-4 py-3 hover:bg-gray-100"> <i class="fa-solid fa-sign-out-alt mr-2"></i>Log out</a>
                </div>
            </div>
        </div>
    </div>

    @yield('page-content')
</main>

<script src="js/Headerbar.js"></script>