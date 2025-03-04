@extends('layouts.home')

@section('page-content')

@section('title', 'Personal Info')
@section('name', $name)
@section('email', $email) 

<main class="flex-1 p-6 bg-gray-100">
    <div class="flex flex-col items-center justify-center h-96 border rounded-lg bg-gray-50">
        <i class="fa-solid fa-user text-6xl text-gray-400 mb-6"></i>
        <h2 class="text-xl font-semibold mb-2">Manage your personal information</h2>
        <p class="text-gray-600 mb-4">Keep your addresses and personal data up to date.</p>
        <div class="relative">
            <button onclick="toggleDropdown()" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600"><i class="fa-solid fa-plus"></i> Add personal info</button>
            <div id="dropdown" class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                <p onclick="openAddEmailForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-envelope mr-2"></i> Email</p>
                <p onclick="openAddNameForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-user mr-2"></i> Name</p>
                <p onclick="openAddPhoneNumberForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-phone mr-2"></i> Phone Number</p>
                <p onclick="openAddAddressForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-map-marker-alt mr-2"></i> Address</p>
                <p onclick="openAddCompanyForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-building mr-2"></i> Company</p>
                <p onclick="openAddWebsiteForm()" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><i class="fa-solid fa-globe mr-2"></i> Website</p>
            </div>
        </div>
    </div>
</main>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 ease-out z-40"></div>

{{-- Modal Email--}}
<div id="addPersonalInfoModalEmail" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add Email information</h2>
            <button onclick="forceCloseAddEmailForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Email Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Type" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Item Organization" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddEmailForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

{{-- Modal Name--}}
<div id="addPersonalInfoModalName" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a name</h2>
            <button onclick="forceCloseAddNameForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Date of Birth" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Phone Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddNameForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

{{-- Modal Phone Number--}}
<div id="addPersonalInfoModalPhoneNumber" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a Phone Number</h2>
            <button onclick="forceCloseAddPhoneNumberForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Date of Birth" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Phone Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddPhoneNumberForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

{{-- Modal Address--}}
<div id="addPersonalInfoModalAddress" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a Address</h2>
            <button onclick="forceCloseAddAddressForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Date of Birth" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Phone Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddAddressForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

{{-- Modal Company--}}
<div id="addPersonalInfoModalCompany" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a Company</h2>
            <button onclick="forceCloseAddCompanyForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Date of Birth" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Phone Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddCompanyForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>

{{-- Modal Website--}}
<div id="addPersonalInfoModalWebsite" class="fixed top-0 right-0 w-96 h-full bg-white shadow-xl transform translate-x-full opacity-0 invisible transition-all duration-500 ease-out z-50 overflow-y-auto border-l border-gray-300">
    <div class="flex flex-col h-full">

        {{-- Header --}}
        <div class="p-4 border
        flex items-center gap-3 bg-gray-50">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fa-solid fa-user text-gray-600"></i>
            </div>
            <h2 class="text-lg font-semibold text-gray-800">Add a Website</h2>
            <button onclick="forceCloseAddWebsiteForm()" class="ml-auto text-gray-500 hover:text-red-500">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        
        {{-- Form --}}
        <div class="flex-1 p-4 space-y-6 bg-gray-50">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Personal details</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Date of Birth" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Email" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Phone Number" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <input type="text" placeholder="Address" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">

                    <textarea placeholder="Note (optional)" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500"></textarea>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-2">Attachments</h3>
                <input type="file" class="w-full p-2 border rounded focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 border-t bg-white flex justify-end gap-2">
            <button onclick="forceCloseAddWebsiteForm()" class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:bg-gray-200">Cancel</button>
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Save</button>
        </div>
    </div>
</div>
<script src="js/PersonalInfo.js"></script>
@endsection
