<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Course - ProHire</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a2e860f05f.js" crossorigin="anonymous"></script>
</head>

<body class="bg-[#F4F6FB]">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="bg-white shadow-xl py-8 px-6">
        {{-- Logo --}}
        <div class="flex items-center gap-2 mb-6">
            <img src="{{ asset('storage/logotps.svg') }}" class="w-sm" alt="ProHire Logo">
        </div>

        {{-- Menu --}}
        <nav class="flex flex-col gap-3 text-sm font-medium">
            <a class="bg-[#D5E1FF] text-blue-900 px-4 py-3 rounded-xl shadow-sm" href="{{ route('dashboard') }}">
                Dashboard
            </a>
            <a class="px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-100" href="{{ route('jobs.finder') }}">
                Jobs Finder
            </a>
            <a class="px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-100" href="#">
                Skill Profile
            </a>
            <a class="px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-100" href="{{ route('courses.index') }}">
                My Courses
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 px-10 py-8">

        <!-- HEADER -->
        <header class="flex justify-between items-center mb-10">
            <h1 class="text-2xl font-semibold text-[#1F2B6C]">
                My Courses > <span class="font-normal text-gray-600">Recommended Course</span>
            </h1>

            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-full shadow hover:bg-blue-50 transition">
                    <i class="fa-regular fa-bell text-gray-600"></i>
                </button>
                <img src="/img/user.jpg" class="h-10 w-10 rounded-full object-cover shadow">
            </div>
        </header>

        <!-- SEARCH BAR SECTION -->
        <div class="bg-white shadow-md rounded-2xl p-6 mb-8">

            <p class="font-semibold text-gray-700 mb-3">Search Courses</p>

            <div class="flex space-x-4">

                <!-- Search box -->
                <div class="flex items-center bg-[#F8F9FC] rounded-xl px-4 py-3 flex-1 shadow-sm">
                    <i class="fa-solid fa-search text-gray-400"></i>
                    <input type="text" placeholder="Search my courses"
                           class="ml-3 w-full bg-transparent text-gray-700 focus:outline-none text-[15px]">
                </div>

                <!-- Category -->
                <button class="bg-[#F8F9FC] px-6 rounded-xl shadow-sm text-gray-600 text-[15px]">
                    Category
                </button>

                <!-- Sort -->
                <button class="bg-[#F8F9FC] px-6 rounded-xl shadow-sm text-gray-600 text-[15px] flex items-center">
                    Sort by <i class="fa-solid fa-chevron-down ml-3 text-gray-400 text-sm"></i>
                </button>
            </div>
        </div>

        <!-- RECOMMENDED COURSE LIST -->
        <section class="bg-white p-6 rounded-2xl shadow">

            <h2 class="text-xl font-semibold text-[#1F2B6C]">UX Research</h2>
            <p class="text-gray-500 text-sm mb-6">You need to upgrade your UX Research Skill</p>

            <div class="space-y-6">

                <!-- ITEM 1 -->
                <div class="bg-white shadow-sm rounded-2xl p-4 flex space-x-4 items-start border">

                    <!-- Thumbnail -->
                    <img src="/img/course1.jpg" class="h-28 w-40 rounded-xl object-cover shadow">

                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800 text-[17px] leading-tight">
                            Conduct UX Research and Test Early Concepts
                        </h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Tags -->
                        <div class="flex space-x-2 mt-3">
                            <span class="bg-[#EEF3FF] text-[#1F2B6C] px-4 py-1 rounded-full text-xs">UX Research</span>
                            <span class="bg-[#EEF3FF] text-[#1F2B6C] px-4 py-1 rounded-full text-xs">UI/UX</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col items-end justify-between h-full">

                        <button class="text-gray-400 hover:text-red-400">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>

                        <a href="#" class="bg-[#1F2B6C] text-white text-sm py-2 px-6 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </a>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="bg-white shadow-sm rounded-2xl p-4 flex space-x-4 items-start border">

                    <!-- Thumbnail -->
                    <img src="/img/course2.jpg" class="h-28 w-40 rounded-xl object-cover shadow">

                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800 text-[17px] leading-tight">
                            UX Research and Information Architecture
                        </h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Tags -->
                        <div class="flex space-x-2 mt-3">
                            <span class="bg-[#EEF3FF] text-[#1F2B6C] px-4 py-1 rounded-full text-xs">UX Research</span>
                            <span class="bg-[#EEF3FF] text-[#1F2B6C] px-4 py-1 rounded-full text-xs">Information</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col items-end justify-between h-full">

                        <button class="text-gray-400 hover:text-red-400">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>

                        <a href="#" class="bg-[#1F2B6C] text-white text-sm py-2 px-6 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </a>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="bg-white shadow-sm rounded-2xl p-4 flex space-x-4 items-start border">

                    <!-- Thumbnail -->
                    <img src="/img/course3.jpg" class="h-28 w-40 rounded-xl object-cover shadow">

                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800 text-[17px] leading-tight">
                            UX User Research
                        </h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Tags -->
                        <div class="flex space-x-2 mt-3">
                            <span class="bg-[#EEF3FF] text-[#1F2B6C] px-4 py-1 rounded-full text-xs">UX Research</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col items-end justify-between h-full">

                        <button class="text-gray-400 hover:text-red-400">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>

                        <a href="#" class="bg-[#1F2B6C] text-white text-sm py-2 px-6 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </a>
                    </div>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>
