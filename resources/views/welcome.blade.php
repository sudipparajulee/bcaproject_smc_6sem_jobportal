@extends('layouts.master')
@section('content')
    <div class="grid gap-4 px-12 mt-5">
        @for ($i = 0; $i < 5; $i++)
            <a href="/jobview" class="bg-white p-4 rounded-lg shadow">
                <h3 class=" text-lg text-green-600">Job Title {{ $i + 1 }}</h3>
                <p class="text-gray-600 line-clamp-2 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quidem porro quas cumque minima amet quisquam soluta nulla ex itaque provident veritatis molestiae eius velit perferendis est voluptatum vel, assumenda iure reiciendis autem natus dolorum. Cupiditate autem nobis magni asperiores exercitationem laboriosam, dicta suscipit, eum, expedita iste aperiam sed porro!</p>
                <div class="mt-2 flex items-center justify-between text-[10px]">
                    <div class="flex gap-2 items-center">
                        <span class="text-gray-500">Company Pvt. Ltd.</span>
                        <span class="text-gray-500">Location, Chitwan</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="text-gray-500">Posted 2 days ago</span>
                        <span class="text-gray-500">Applicants 10</span>
                    </div>
                </div>
                <div class="mt-2 flex items-center gap-2 text-[10px]">
                    <span class="bg-gray-100 px-2 py-0.5 rounded-full">Full-time</span>
                    <span class="bg-gray-100 px-2 py-0.5 rounded-full">Remote</span>
                </div>
            </a>
        @endfor
    </div>
@endsection
