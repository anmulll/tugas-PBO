<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Saved Jobs</title>
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

        {{-- Top --}}
        <div class="flex justify-between items-start mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Saved Jobs</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}" class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/notif.svg') }}" alt="Notification" class="w-12 h-auto">
                </a>

                <a href="{{ route('saved.jobs') }}" class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/save.svg') }}" alt="Saved" class="w-12 h-auto">
                </a>

                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
            </div>
        </div>

        {{-- ================= SEARCH AREA ================= --}}
        <div class="bg-white shadow rounded-2xl p-6 mb-6">
            <p class="text-sm text-gray-600 mb-3">2 jobs</p>

            <div class="grid grid-cols-[1fr_180px] gap-4">

                <div class="bg-[#F3F4F6] px-4 py-3 rounded-full flex items-center gap-3">
                    <span class="text-gray-400">🔍</span>
                    <input type="text" placeholder="Search save jobs"
                        class="w-full text-sm bg-transparent focus:outline-none">
                </div>

                <div class="bg-[#F3F4F6] px-4 py-3 rounded-full flex items-center justify-between">
                    <span class="text-sm text-gray-600">Newest</span>
                    <span>⬇️</span>
                </div>

            </div>
        </div>

        {{-- ================== SAVED JOB CARDS (STATIC) ================== --}}
        <div class="grid lg:grid-cols-2 gap-6">

            {{-- CARD #1 --}}
            <div class="bg-white rounded-2xl shadow p-5 flex flex-col justify-between">

                <div class="flex items-start gap-3">
                    <img src="{{ asset('storage/company1.png') }}" class="w-10 h-10 rounded-full" alt="Company">

                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">UI/UX Designer</p>
                        <p class="text-xs text-gray-500">Pickolab Studio</p>
                    </div>

                    <button class="text-blue-700 text-xl">🔖</button>
                </div>

                <p class="text-xs text-gray-600 mt-3 mb-4">
                    We at Pickolab Studio in Semarang, Central Java, are looking for a creative,
                    experienced UI/UX Designer to join our team...
                </p>

                <div class="flex gap-2 mb-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">Part Time</span>
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">UI/UX</span>
                </div>

                <div class="flex items-center justify-between">
                    <p class="text-[11px] text-gray-600">💰 Rp 2.75jt – Rp 3.5jt/month</p>

                    <button class="px-6 py-2 rounded-full bg-[#314779] text-white text-xs">
                        Apply Now
                    </button>
                </div>
            </div>

            {{-- CARD #2 --}}
            <div class="bg-white rounded-2xl shadow p-5 flex flex-col justify-between">

                <div class="flex items-start gap-3">
                    <img src="{{ asset('storage/company2.png') }}" class="w-10 h-10 rounded-full" alt="Company">

                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">Web Developer</p>
                        <p class="text-xs text-gray-500">Kurniawan Group</p>
                    </div>

                    <button class="text-blue-700 text-xl">🔖</button>
                </div>

                <p class="text-xs text-gray-600 mt-3 mb-4">
                    We are looking for individuals who will play an important role in building
                    functional, responsive, and attractive web applications...
                </p>

                <div class="flex gap-2 mb-4">
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">Full Time</span>
                    <span class="px-3 py-1 rounded-full bg-blue-100 text-[11px] text-blue-800">JavaScript</span>
                </div>

                <div class="flex items-center justify-between">
                    <p class="text-[11px] text-gray-600">💰 Rp 2.75jt – Rp 3.5jt/month</p>

                    <button class="px-6 py-2 rounded-full bg-[#314779] text-white text-xs">
                        Apply Now
                    </button>
                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>
