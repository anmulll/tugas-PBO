<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs Finder – ProHire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#E8EDF7]">

<div class="grid grid-cols-[250px_1fr] min-h-screen">

    {{-- =================== SIDEBAR =================== --}}
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

    
    {{-- =================== MAIN CONTENT =================== --}}
    <main class="p-10">

        {{-- TOP BAR --}}
        <div class="flex items-start justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Jobs Finder</h1>

            <div class="flex items-center gap-4">
                <button class="w-10 h-10 rounded-full bg-white shadow flex items-center justify-center">🔔</button>
                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
            </div>
        </div>


        <div class="grid grid-cols-[1fr_350px] gap-8">

            {{-- =================== SEARCH & JOB LIST =================== --}}
            <div>

                {{-- SEARCH BAR --}}
                <div class="bg-white shadow rounded-2xl p-6 mb-8 border border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2 w-full">
                            <span class="text-gray-500 mr-2">🔍</span>
                            <input type="text" placeholder="UI/UX"
                                   class="bg-transparent w-full outline-none text-sm">
                        </div>

                        <div class="bg-gray-100 rounded-xl px-4 py-2 flex items-center gap-2 cursor-pointer">
                            <span class="text-gray-700 text-sm">Sort by</span>
                            <span>⬇</span>
                        </div>
                    </div>

                    {{-- JOB COUNT --}}
                    <div class="mt-5 bg-blue-100 text-blue-800 text-center font-semibold py-2 rounded-xl">
                        59 Jobs
                    </div>
                </div>


                {{-- =================== JOB CARD 1 =================== --}}
                <div class="bg-white shadow rounded-2xl p-6 mb-6 border border-gray-100">

                    <div class="flex justify-between items-start">
                        <div class="flex items-start gap-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968705.png"
                                 class="w-12 h-12 rounded-full">
                            <div>
                                <h2 class="font-bold text-lg text-gray-800">UI/UX Designer</h2>
                                <p class="text-gray-600 text-sm">Pickolab Studio</p>

                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    We at Pickolab Studio are looking for a creative, experienced, and dedicated UI/UX Designer...
                                </p>

                                <div class="flex gap-3 mt-3">
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">Part Time</span>
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">UI/UX</span>
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">Design</span>
                                </div>
                            </div>
                        </div>

                        <span class="cursor-pointer text-gray-500">🔖</span>
                    </div>

                    <div class="flex justify-between items-center mt-5 text-sm">
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>💰 Rp 2.75jt – Rp 3.5jt/month</span>
                            <span>👥 328 people applied</span>
                        </div>

                        <span class="text-gray-500 text-sm">Posted 15 days ago</span>

                        <button class="bg-blue-900 text-white px-6 py-2 rounded-xl text-sm shadow">
                            Apply Now
                        </button>
                    </div>
                </div>


                {{-- =================== JOB CARD 2 =================== --}}
                <div class="bg-white shadow rounded-2xl p-6 mb-6 border border-gray-100">

                    <div class="flex justify-between items-start">
                        <div class="flex items-start gap-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968381.png"
                                 class="w-12 h-12 rounded-full">
                            <div>
                                <h2 class="font-bold text-lg text-gray-800">UI/UX Designer</h2>
                                <p class="text-gray-600 text-sm">PT Holink Solusi Digital</p>

                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    You'll work from research to wireframes, prototypes, user testing, and final delivery...
                                </p>

                                <div class="flex gap-3 mt-3">
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">Part Time</span>
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">UI/UX</span>
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">Design</span>
                                </div>
                            </div>
                        </div>

                        <span class="cursor-pointer text-gray-500">🔖</span>
                    </div>

                    <div class="flex justify-between items-center mt-5 text-sm">
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>💰 Rp 15jt – Rp 20jt/month</span>
                            <span>👥 873 people applied</span>
                        </div>

                        <span class="text-gray-500 text-sm">Posted 15 days ago</span>

                        <button class="bg-blue-900 text-white px-6 py-2 rounded-xl text-sm shadow">
                            Apply Now
                        </button>
                    </div>
                </div>

            </div>



            {{-- =================== FILTER SIDEBAR =================== --}}
            <aside class="bg-transparent">

                {{-- FILTER TITLE --}}
                <div class="bg-white shadow rounded-2xl p-5 border border-gray-100 flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Job Filter</span>
                    <button class="text-gray-500 text-sm">Clear all</button>
                </div>


                {{-- EXPERIENCE LEVEL --}}
                <div class="bg-white shadow rounded-2xl p-5 border border-gray-100 mt-5">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-semibold text-gray-800 text-sm">Experience Level</span>
                        <button class="text-gray-500 text-sm">Clear</button>
                    </div>

                    <div class="space-y-2 text-sm text-gray-700">
                        <label class="flex items-center gap-2"><input type="checkbox"> Entry Level</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Intermediate</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Expert</label>
                    </div>
                </div>


                {{-- JOB TYPE --}}
                <div class="bg-white shadow rounded-2xl p-5 border border-gray-100 mt-5">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-semibold text-gray-800 text-sm">Job Type</span>
                        <button class="text-gray-500 text-sm">Clear</button>
                    </div>

                    <div class="space-y-2 text-sm text-gray-700">
                        <label class="flex items-center gap-2"><input type="checkbox"> Full Time</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Part Time</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Freelance</label>
                    </div>
                </div>


                {{-- JOB LOCATION --}}
                <div class="bg-white shadow rounded-2xl p-5 border border-gray-100 mt-5">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-semibold text-gray-800 text-sm">Job Location</span>
                        <button class="text-gray-500 text-sm">Clear</button>
                    </div>

                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="checkbox"> On site
                    </label>

                    <div class="flex items-center bg-gray-100 rounded-xl px-3 py-2 mt-2">
                        <span class="text-gray-500 mr-2">🔍</span>
                        <input type="text" placeholder="Search" class="bg-transparent outline-none w-full text-sm">
                    </div>

                    <label class="flex items-center gap-2 text-sm text-gray-700 mt-2">
                        <input type="checkbox"> Remote
                    </label>
                </div>


                {{-- EXPECTED SALARY --}}
                <div class="bg-white shadow rounded-2xl p-5 border border-gray-100 mt-5">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-semibold text-gray-800 text-sm">Expected Salary</span>
                        <button class="text-gray-500 text-sm">Clear</button>
                    </div>

                    <div class="space-y-2 text-sm text-gray-700">
                        <label class="flex items-center gap-2"><input type="checkbox"> Under Rp2 jt</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Rp2 jt – Rp10 jt</label>
                        <label class="flex items-center gap-2"><input type="checkbox"> Above Rp10 jt</label>
                    </div>
                </div>

            </aside>

        </div>

    </main>

</div>

</body>
</html>
