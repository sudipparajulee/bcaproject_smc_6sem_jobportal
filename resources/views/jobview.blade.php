@extends('layouts.master')
@section('content')
    <div class="px-12 py-5">
        <a href="/" class="text-green-500 text-sm mb-5 inline-block">&larr; Back to Listings</a>
        <div class="bg-white p-6 rounded-lg shadow relative">
            <h2 class="text-2xl font-bold text-green-600 mb-2">Job Title Example</h2>
            <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                <span>Company Pvt. Ltd.</span>
                <span>Location, Chitwan</span>
                <span>Posted 2 days ago</span>
                <span>Applicants 10</span>
            </div>
            <div class="flex items-center gap-2 text-sm mb-4">
                <span class="bg-gray-100 px-3 py-1 rounded-full">Full-time</span>
                <span class="bg-gray-100 px-3 py-1 rounded-full">Remote</span>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Job Description</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, porro.</p>
            </div>
            <div class="mt-5 absolute top-5 right-10">
                <a href="#" class="bg-green-500 text-white px-6 py-2 rounded-lg">Apply Now</a>
            </div>
        </div>
    </div>
@endsection
