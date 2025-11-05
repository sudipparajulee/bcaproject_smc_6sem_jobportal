<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <header class="flex justify-between items-center bg-green-500 px-10 py-2 text-white">
        <div>
            <h2 class="font-bold text-xl">LOGO</h2>
        </div>
        <div class="w-1/3 flex gap-2">
            <input type="search" placeholder="Search..." class="px-2 py-1 rounded-lg w-full text-black">
            <button class="bg-white text-green-500 px-4 py-1 rounded-lg">0</button>
        </div>
        <div>
            <a href="">Login</a>
        </div>
    </header>
    <div class="grid gap-4 px-12 mt-5">
        @for ($i = 0; $i < 5; $i++)
            <a href="#" class="bg-white p-4 rounded-lg shadow">
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
    <footer class="py-5 px-12 bg-green-500 text-white mt-10">
        <div class="grid grid-cols-3 gap-5">
            <div>
                <h4 class="font-bold mb-2">Company</h4>
                <ul class="text-sm space-y-1">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Support</h4>
                <ul class="text-sm space-y-1">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Legal</h4>
                <ul class="text-sm space-y-1">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-sm mt-5">
            <hr class="bg-green-300 h-0.5 border-none mb-4">
            &copy; {{now()->year}} Your Company. All rights reserved.
        </div>
    </footer>
</body>
</html>
