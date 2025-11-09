@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="grid grid-cols-3 gap-5">
        <div class="bg-gradient-to-r from-blue-50 to-red-50 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Total Users</h2>
            <div class="flex justify-between items-center">
                <span class="text-gray-500 font-bold">TU</span>
                <span class="text-3xl font-semibold">1000</span>
            </div>
        </div>
        <div class="bg-gradient-to-r from-yellow-50 to-blue-50 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Total Companies</h2>
            <div class="flex justify-between items-center">
                <span class="text-gray-500 font-bold">TU</span>
                <span class="text-3xl font-semibold">1000</span>
            </div>
        </div>
        <div class="bg-gradient-to-r from-red-50 to-green-50 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Total Jobs</h2>
            <div class="flex justify-between items-center">
                <span class="text-gray-500 font-bold">TU</span>
                <span class="text-3xl font-semibold">1000</span>
            </div>
        </div>

    </div>
@endsection
