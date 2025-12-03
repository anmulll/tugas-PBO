<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses - ProHire</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icon -->
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
            <h1 class="text-2xl font-semibold text-[#1F2B6C]">My Courses</h1>

            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-full shadow-md hover:bg-blue-50 transition">
                    <i class="fa-regular fa-bell text-gray-600"></i>
                </button>

                <img src="/img/user.jpg" class="h-10 w-10 rounded-full object-cover shadow">
            </div>
        </header>

        <!-- SEARCH BAR -->
        <div class="bg-white shadow-md rounded-2xl p-4 flex items-center mb-10">
            <i class="fa-solid fa-search text-gray-400 text-lg"></i>
            <input type="text"
                   placeholder="Search my courses"
                   class="ml-4 w-full bg-transparent text-gray-700 text-[15px] focus:outline-none">
        </div>

        <div class="grid grid-cols-3 gap-10">

            <!-- LEFT CONTENT -->
            <section class="col-span-2">

                <!-- FEATURED SECTION -->
                <h2 class="text-lg font-semibold text-[#1F2B6C] mb-4">Featured Courses</h2>

                <div class="grid grid-cols-3 gap-6">

                    <!-- FEATURED ITEM 1 -->
                    <div class="relative bg-gradient-to-br from-[#90B7EB] to-[#BFD9F3] rounded-2xl p-6 shadow-md h-56 flex flex-col justify-between">
                        <div class="text-white text-lg font-medium leading-tight">
                            Data Analyst<br>Bootcamp for Beginner
                        </div>

                        <button class="bg-[#1F2B6C] text-white text-sm py-2 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </button>
                    </div>

                    <!-- FEATURED ITEM 2 -->
                    <div class="bg-[#F8F9FC] rounded-2xl p-6 shadow-md h-56 flex flex-col justify-between">
                        <div class="text-gray-700 text-lg font-medium leading-tight">
                            Node.js Tutorial for Beginners
                        </div>

                        <button class="bg-[#1F2B6C] text-white text-sm py-2 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </button>
                    </div>

                    <!-- FEATURED ITEM 3 -->
                    <div class="bg-[#F8F9FC] rounded-2xl p-6 shadow-md h-56 flex flex-col justify-between">
                        <div class="text-gray-700 text-lg font-medium leading-tight">
                            Data Scientist Basics
                        </div>

                        <button class="bg-[#1F2B6C] text-white text-sm py-2 rounded-full shadow hover:bg-[#2A3B8F] transition">
                            Open The Site
                        </button>
                    </div>

                </div>

                <!-- RECOMMENDED SECTION -->
                <div class="flex justify-between items-center mt-10">
                    <h2 class="text-lg font-semibold text-[#1F2B6C]">Recommended Course</h2>
                    <a href="#" class="text-blue-700 text-sm font-medium hover:underline">View All</a>
                </div>

                <div class="space-y-5 mt-5">

                    <!-- RECOMMENDED ROW 1 -->
                    <div class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4">
                        <img src="/img/course1.jpg" class="h-16 w-24 rounded-lg object-cover shadow">

                        <div>
                            <p class="text-sm text-gray-500">UX Research</p>
                            <p class="font-semibold text-gray-800 leading-tight">
                                Conduct UX Research and Test Early Concepts
                            </p>
                        </div>
                    </div>

                    <!-- RECOMMENDED ROW 2 -->
                    <div class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4">
                        <img src="/img/course2.jpg" class="h-16 w-24 rounded-lg object-cover shadow">

                        <div>
                            <p class="text-sm text-gray-500">UX Research</p>
                            <p class="font-semibold text-gray-800 leading-tight">
                                UX Research and Information Architecture
                            </p>
                        </div>
                    </div>

                    <!-- RECOMMENDED ROW 3 -->
                    <div class="bg-white rounded-xl shadow-md p-4 flex items-center space-x-4">
                        <img src="/img/course3.jpg" class="h-16 w-24 rounded-lg object-cover shadow">

                        <div>
                            <p class="text-sm text-gray-500">UX Research</p>
                            <p class="font-semibold text-gray-800 leading-tight">
                                UX User Research
                            </p>
                        </div>
                    </div>

                </div>

            </section>

            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-8">

                <!-- PROFILE CARD -->
                <div class="bg-white rounded-2xl p-6 shadow-md text-center">
                    <img src="/img/user.jpg" class="h-20 w-20 rounded-full mx-auto border-4 border-white shadow">

                    <h3 class="font-semibold mt-4 text-[#1F2B6C]">Sabrina Carpenter</h3>
                    <p class="text-gray-500 text-sm">Graphic Designer</p>

                    <div class="grid grid-cols-3 gap-3 mt-6">

                        <div class="bg-[#EEF3FF] rounded-lg p-3 text-center">
                            <div class="text-xl font-bold text-[#1F2B6C]">9</div>
                            <div class="text-xs text-gray-500">Courses</div>
                        </div>

                        <div class="bg-[#EEF3FF] rounded-lg p-3 text-center">
                            <div class="text-xl font-bold text-[#1F2B6C]">53</div>
                            <div class="text-xs text-gray-500">Hours</div>
                        </div>

                        <div class="bg-[#EEF3FF] rounded-lg p-3 text-center">
                            <div class="text-xl font-bold text-[#1F2B6C]">2</div>
                            <div class="text-xs text-gray-500">Finished</div>
                        </div>

                    </div>
                </div>

                <!-- HOUR SPEND CHART -->
                <div class="bg-white rounded-2xl p-6 shadow-md">
                    <h3 class="font-semibold text-[#1F2B6C]">Hour Spend</h3>
                    <p class="text-3xl font-bold text-[#1F2B6C] mt-2">53</p>

                    <div class="flex items-end mt-6 space-x-3">
                        <div class="w-6 h-10 bg-[#BBD1F3] rounded-xl"></div>
                        <div class="w-6 h-16 bg-[#7DA5E7] rounded-xl"></div>
                        <div class="w-6 h-24 bg-[#1F2B6C] rounded-xl"></div>
                        <div class="w-6 h-14 bg-[#A5C0F2] rounded-xl"></div>
                    </div>
                </div>

                <!-- LAST COURSE -->
                <div class="space-y-4">
                    <h3 class="font-semibold text-[#1F2B6C]">Last Course</h3>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-gray-800">UX User Research</span>
                            <span class="text-gray-500 text-xs">48 mins ago</span>
                        </div>
                        <p class="text-blue-700 mt-2 text-sm font-medium">3/6</p>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-gray-800">Conduct UX Research and Test Early Concepts</span>
                            <span class="text-gray-500 text-xs">48 mins ago</span>
                        </div>
                        <p class="text-blue-700 mt-2 text-sm font-medium">1/3</p>
                    </div>
                </div>

            </aside>

        </div>

    </main>

</div>

</body>
</html>
