<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#E8EDF7]">

<div class="grid grid-cols-[260px_1fr] min-h-screen">

    {{-- ================= SIDEBAR ================= --}}
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

    {{-- ================= MAIN CONTENT ================= --}}
    <main class="p-8">

        {{-- Top bar: title + icons + avatar --}}
        <div class="flex justify-between items-start mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}"
                    class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/notif.svg') }}" 
                        alt="Notification"
                        class="w-12 h-auto">
                </a>
                <a href="{{ route('saved.jobs') }}"
                    class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/save.svg') }}" 
                    alt="save"
                    class="w-12 h-auto">
                </a>

                <a href="{{ route('profile.edit') }}" class="flex items-center justify-center text-gray-600">
                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
                </a>
            </div>
        </div>

        {{-- GRID: kiri (konten utama) & kanan (progress/skill gap) --}}
        <div class="grid grid-cols-[minmax(0,2fr)_minmax(0,1fr)] gap-6">

            {{-- ================= LEFT COLUMN ================= --}}
            <div class="space-y-6">

                {{-- Greeting card --}}
                <div class="bg-gradient-to-r from-[#BBD3FF] to-[#D4E5FF] rounded-2xl shadow p-6">
                    <h2 class="text-xl font-semibold text-blue-900">
                        Hi, Sabrina! 👋
                    </h2>
                    <p class="text-sm text-blue-900 mt-1">
                        Explore roles that align with your background and potential.
                    </p>
                </div>

                {{-- Search bar (di atas konten kiri-kanan) – tampak di desain sebelah kanan,
                    tapi kita letakkan di atas supaya lebih simple --}}
                <div class="md:hidden bg-white rounded-full shadow flex items-center px-4 py-3">
                    <span class="text-gray-400 mr-2">🔍</span>
                    <input type="text" class="w-full text-sm focus:outline-none"
                           placeholder="Search job, role, or company">
                </div>

                {{-- Recommended course --}}
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-semibold text-gray-800">Recommended Course to Improve</h3>
                        <a href="#" class="text-xs text-blue-700 underline">See all</a>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        {{-- Course 1 --}}
                        <div class="bg-white rounded-2xl shadow overflow-hidden">
                            <div class="h-24 bg-gray-300"></div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="w-6 h-6 rounded bg-blue-700 text-white text-xs flex items-center justify-center font-bold">
                                        C
                                    </span>
                                    <p class="text-sm font-semibold text-gray-800">
                                        Tableau For Beginners
                                    </p>
                                </div>
                                <p class="text-xs text-gray-500 mb-4">
                                    Learn how to create visual dashboards and analyze data using Tableau.
                                </p>
                                <button
                                    class="w-full py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                                    Start Learning
                                </button>
                            </div>
                        </div>

                        {{-- Course 2 --}}
                        <div class="bg-white rounded-2xl shadow overflow-hidden">
                            <div class="h-24 bg-gray-300"></div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="w-6 h-6 rounded bg-blue-700 text-white text-xs flex items-center justify-center font-bold">
                                        C
                                    </span>
                                    <p class="text-sm font-semibold text-gray-800">
                                        Intro to Python for Data Analysis
                                    </p>
                                </div>
                                <p class="text-xs text-gray-500 mb-4">
                                    Learn the foundations of Python and discover how it's used to analyze data.
                                </p>
                                <button
                                    class="w-full py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                                    Start Learning
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Recommended Jobs --}}
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-semibold text-gray-800">Recommended Jobs For You</h3>
                        <a href="#" class="text-xs text-blue-700 underline">See all</a>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        {{-- Job 1 --}}
                        <div class="bg-white rounded-2xl shadow p-4 flex flex-col justify-between">
                            <div class="flex items-start gap-3 mb-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-yellow-300 text-xs font-bold">
                                    ✦
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">UI/UX Designer</p>
                                    <p class="text-xs text-gray-500">Pickolab Studio</p>
                                </div>
                                <button class="text-blue-700 text-lg">🔖</button>
                            </div>

                            <div class="text-[11px] text-gray-600 space-y-1 mb-3">
                                <p>Rp 2.75jt – Rp 3.5jt/month</p>
                                <p>Posted 15 days ago</p>
                            </div>

                            <div class="flex gap-2 mb-4">
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">Part Time</span>
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">UI/UX</span>
                            </div>

                            <button
                                class="w-full py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                                Apply Now
                            </button>
                        </div>

                        {{-- Job 2 --}}
                        <div class="bg-white rounded-2xl shadow p-4 flex flex-col justify-between">
                            <div class="flex items-start gap-3 mb-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 text-xs font-bold">
                                    💼
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Web Developer</p>
                                    <p class="text-xs text-gray-500">Kurniawan Group</p>
                                </div>
                                <button class="text-blue-700 text-lg">🔖</button>
                            </div>

                            <div class="text-[11px] text-gray-600 space-y-1 mb-3">
                                <p>Rp 2.75jt – Rp 3.5jt/month</p>
                                <p>Posted 15 days ago</p>
                            </div>

                            <div class="flex gap-2 mb-4">
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">Part Time</span>
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">UI/UX</span>
                            </div>

                            <button
                                class="w-full py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ================= RIGHT COLUMN ================= --}}
            <div class="space-y-6">

                {{-- Search bar (versi desktop di kanan atas) --}}
                <div class="hidden md:flex bg-white rounded-full shadow px-4 py-3 items-center">
                    <span class="text-gray-400 mr-2">🔍</span>
                    <input type="text"
                           class="w-full text-sm focus:outline-none"
                           placeholder="Search job, role, or company">
                </div>

                {{-- Application Progress card --}}
                <div class="bg-white rounded-3xl shadow p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-blue-900 text-center md:text-left">
                        Application Progress
                    </h3>

                    <div class="grid grid-cols-2 gap-3 text-xs font-medium">
                        <div class="bg-[#E6EEFF] rounded-xl py-3 px-3 flex items-center gap-2">
                            <span>✉️</span>
                            <div>
                                <p>Sent: 2</p>
                            </div>
                        </div>
                        <div class="bg-[#E6EEFF] rounded-xl py-3 px-3 flex items-center gap-2">
                            <span>👁️</span>
                            <div>
                                <p>Viewed: 2</p>
                            </div>
                        </div>
                        <div class="bg-[#E6EEFF] rounded-xl py-3 px-3 flex items-center gap-2">
                            <span>🤝</span>
                            <div>
                                <p>Interview: 1</p>
                            </div>
                        </div>
                        <div class="bg-[#E6EEFF] rounded-xl py-3 px-3 flex items-center gap-2">
                            <span>✅</span>
                            <div>
                                <p>Hired: 0</p>
                            </div>
                        </div>
                    </div>

                    <button
                        class="w-full mt-2 py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                        View all applications
                    </button>
                </div>

                {{-- Skill Gap Overview --}}
                <div class="bg-white rounded-3xl shadow p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-blue-900 text-center md:text-left">
                        Skill Gap Overview
                    </h3>

                    <div class="bg-[#E6EEFF] rounded-xl p-4 text-xs">
                        <p class="font-semibold mb-2">🔎 Missing Skills: 3</p>
                        <ul class="list-disc ml-4 space-y-1 text-gray-700">
                            <li>Tableau</li>
                            <li>UX Testing</li>
                            <li>Advanced Search</li>
                        </ul>
                    </div>

                    <button
                        class="w-full mt-2 py-2 rounded-full bg-[#314779] text-white text-xs font-medium shadow">
                        View full analysis
                    </button>
                </div>

            </div>

        </div>

    </main>
</div>

</body>
</html>
