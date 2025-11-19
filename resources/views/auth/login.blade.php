@extends('layouts.master')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-8">
    <div class="w-full max-w-md px-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-green-500">
                <h2 class="text-white text-lg font-semibold text-center">Sign in to your account</h2>
            </div>

            <form action="{{ route('login') }}" method="POST" class="px-6 py-6" novalidate>
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}" placeholder="you@example.com"
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required placeholder="••••••••"
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>



                <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md shadow focus:outline-none focus:ring-2 focus:ring-green-500">
                    Login
                </button>
            </form>

            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <p class="text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500 hover:underline">
                        Sign up
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
