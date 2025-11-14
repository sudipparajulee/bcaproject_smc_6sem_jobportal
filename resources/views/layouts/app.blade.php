<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.alert')
        <div class="flex">
            <div class="bg-gray-100 w-52 h-screen pt-5">
                <a href="{{route('dashboard')}}" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Dashboard</a>
                <a href="{{route('tags.index')}}" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Tags</a>
                <a href="" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Companies</a>
                <a href="" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Users</a>
                <a href="" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Jobs</a>
                <a href="" class="font-bold text-lg block hover:bg-blue-600 hover:text-white px-4 py-2">Logout</a>
            </div>
            <div class="p-4 flex-1">
                <h1 class="text-2xl font-bold">@yield('title')</h1>
                <hr class="bg-blue-600 h-1">
                <div class="mt-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
