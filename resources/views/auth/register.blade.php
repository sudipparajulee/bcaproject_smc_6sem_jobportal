@extends('layouts.master')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-8">
    <div class="w-full max-w-2xl px-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Toggle Buttons -->
            <div class="flex border-b border-gray-200">
                <button type="button" id="userBtn" onclick="showUserForm()"
                    class="flex-1 py-4 px-6 text-center font-semibold transition-colors duration-200 bg-green-600 text-white">
                    User Registration
                </button>
                <button type="button" id="companyBtn" onclick="showCompanyForm()"
                    class="flex-1 py-4 px-6 text-center font-semibold transition-colors duration-200 bg-gray-200 text-gray-700 hover:bg-gray-300">
                    Company Registration
                </button>
            </div>

            <!-- User Registration Form -->
            <div id="userForm" class="p-6">
                <h2 class="text-2xl font-bold text-green-600 mb-6 text-center">Create User Account</h2>

                <form action="{{ route('register') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="user_type" value="user">

                    <div class="mb-4">
                        <label for="user_name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="user_name" name="name" type="text" required value="{{ old('name') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="user_email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="user_email" name="email" type="email" required value="{{ old('email') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="user_password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="user_password" name="password" type="password" required
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="user_address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="user_address" name="address" rows="2"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="user_skills" class="block text-sm font-medium text-gray-700">Skills</label>
                        <input id="user_skills" name="skills" type="text" value="{{ old('skills') }}" placeholder="e.g., PHP, JavaScript, Design"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('skills')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="user_phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input id="user_phone" name="phone" type="tel" value="{{ old('phone') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('phone')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Profile Picture --}}
                    <div class="mb-6">
                        <label for="user_profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                        <input id="user_profile_picture" name="profile_picture" type="file"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('profile_picture')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-colors duration-200">
                        Register as User
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-green-600 hover:text-green-500 hover:underline">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>

            <!-- Company Registration Form -->
            <div id="companyForm" class="p-6 hidden">
                <h2 class="text-2xl font-bold text-green-600 mb-6 text-center">Create Company Account</h2>

                <form action="{{ route('register') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="user_type" value="company">

                    <div class="mb-4">
                        <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input id="company_name" name="name" type="text" required value="{{ old('name') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="company_email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="company_email" name="email" type="email" required value="{{ old('email') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="company_password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="company_password" name="password" type="password" required
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="company_address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="company_address" name="address" rows="2"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="company_phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input id="company_phone" name="phone" type="tel" value="{{ old('phone') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('phone')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Profile Picture --}}
                    <div class="mb-6">
                        <label for="company_profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                        <input id="company_profile_picture" name="profile_picture" type="file"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600" />
                        @error('profile_picture')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 transition-colors duration-200">
                        Register as Company
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-green-600 hover:text-green-500 hover:underline">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showUserForm() {
        // Show user form, hide company form
        document.getElementById('userForm').classList.remove('hidden');
        document.getElementById('companyForm').classList.add('hidden');

        // Update button styles
        document.getElementById('userBtn').classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
        document.getElementById('userBtn').classList.add('bg-green-600', 'text-white');

        document.getElementById('companyBtn').classList.remove('bg-green-600', 'text-white');
        document.getElementById('companyBtn').classList.add('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
    }

    function showCompanyForm() {
        // Show company form, hide user form
        document.getElementById('companyForm').classList.remove('hidden');
        document.getElementById('userForm').classList.add('hidden');

        // Update button styles
        document.getElementById('companyBtn').classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
        document.getElementById('companyBtn').classList.add('bg-green-600', 'text-white');

        document.getElementById('userBtn').classList.remove('bg-green-600', 'text-white');
        document.getElementById('userBtn').classList.add('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
    }
</script>
@endsection
