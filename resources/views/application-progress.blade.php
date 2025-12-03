<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Progress – ProHire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#E8EDF7]">

<div class="grid grid-cols-[250px_1fr] min-h-screen">

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
    <main class="p-10">

        {{-- TOP BAR --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard <span class="text-gray-500">› Application Progress</span>
            </h1>

            <div class="flex items-center gap-4">
                <button class="w-10 h-10 rounded-full bg-white shadow flex items-center justify-center">
                    🔔
                </button>
                <img src="https://i.pravatar.cc/100"
                     class="w-10 h-10 rounded-full shadow object-cover">
            </div>
        </div>

        {{-- STATUS BOXES --}}
        <div class="grid grid-cols-4 gap-6 mb-8">

            <div class="bg-white rounded-2xl shadow px-6 py-4 flex flex-col items-center">
                <div class="text-xl">📨</div>
                <h2 class="text-xl font-bold">2</h2>
                <p class="text-gray-500 text-sm">Sent</p>
            </div>

            <div class="bg-white rounded-2xl shadow px-6 py-4 flex flex-col items-center">
                <div class="text-xl">🔄</div>
                <h2 class="text-xl font-bold">2</h2>
                <p class="text-gray-500 text-sm">Viewed</p>
            </div>

            <div class="bg-white rounded-2xl shadow px-6 py-4 flex flex-col items-center">
                <div class="text-xl">🗣️</div>
                <h2 class="text-xl font-bold">1</h2>
                <p class="text-gray-500 text-sm">Interview</p>
            </div>

            <div class="bg-white rounded-2xl shadow px-6 py-4 flex flex-col items-center">
                <div class="text-xl">👤</div>
                <h2 class="text-xl font-bold">-</h2>
                <p class="text-gray-500 text-sm">Hired</p>
            </div>

        </div>

        {{-- TABLE --}}
        <div class="bg-white rounded-3xl shadow overflow-hidden">
            
            {{-- HEADER --}}
            <div class="grid grid-cols-4 bg-[#D5DDF1] text-gray-700 text-sm font-semibold py-4 px-8">
                <div>Company</div>
                <div>Position</div>
                <div>Status</div>
                <div>Updated</div>
            </div>

            {{-- ROW 1 --}}
            <div class="grid grid-cols-4 items-center py-4 px-8 border-b">
                <div class="flex items-center gap-3">
                    <img src="https://i.imgur.com/5cP7Fjr.png" class="w-8 h-8 rounded-full">
                    <span class="font-medium text-gray-800">Pickolab Studio</span>
                </div>
                <p class="text-gray-700">UI/UX Designer</p>
                <span class="bg-yellow-300 text-gray-800 text-xs px-3 py-1 rounded-full font-semibold">
                    Interview
                </span>
                <p class="text-gray-500 text-xs">Last Updated 27 Nov 2025</p>
            </div>

            {{-- ROW 2 --}}
            <div class="grid grid-cols-4 items-center py-4 px-8 border-b">
                <div class="flex items-center gap-3">
                    <img src="https://i.imgur.com/jQhJkch.png" class="w-8 h-8 rounded-full">
                    <span class="font-medium text-gray-800">Kurniawan Group</span>
                </div>
                <p class="text-gray-700">Web Developer</p>
                <span class="bg-blue-300 text-gray-800 text-xs px-3 py-1 rounded-full font-semibold">
                    Sent
                </span>
                <p class="text-gray-500 text-xs">Last Updated 15 Nov 2025</p>
            </div>

            {{-- ROW 3 --}}
            <div class="grid grid-cols-4 items-center py-4 px-8 border-b">
                <div class="flex items-center gap-3">
                    <img src="https://i.imgur.com/1M5N7kU.png" class="w-8 h-8 rounded-full">
                    <span class="font-medium text-gray-800">PT Mandiri Tunas Finance</span>
                </div>
                <p class="text-gray-700">UI/UX Staff</p>
                <span class="bg-blue-300 text-gray-800 text-xs px-3 py-1 rounded-full font-semibold">
                    Sent
                </span>
                <p class="text-gray-500 text-xs">Last Updated 22 Nov 2025</p>
            </div>

            {{-- ROW 4 --}}
            <div class="grid grid-cols-4 items-center py-4 px-8 border-b">
                <div class="flex items-center gap-3">
                    <img src="https://i.imgur.com/aNnflUp.png" class="w-8 h-8 rounded-full">
                    <span class="font-medium text-gray-800">PT Menara Sejuk Sentosa</span>
                </div>
                <p class="text-gray-700">IT Developer</p>
                <span class="bg-purple-300 text-gray-800 text-xs px-3 py-1 rounded-full font-semibold">
                    Sent
                </span>
                <p class="text-gray-500 text-xs">Last Updated 8 Nov 2025</p>
            </div>

            {{-- ROW 5 --}}
            <div class="grid grid-cols-4 items-center py-4 px-8">
                <div class="flex items-center gap-3">
                    <img src="https://i.imgur.com/W7sQy6C.png" class="w-8 h-8 rounded-full">
                    <span class="font-medium text-gray-800">Pondok Lensa</span>
                </div>
                <p class="text-gray-700">Front End Developer</p>
                <span class="bg-purple-300 text-gray-800 text-xs px-3 py-1 rounded-full font-semibold">
                    Sent
                </span>
                <p class="text-gray-500 text-xs">Last Updated 21 Nov 2025</p>
            </div>

        </div>

    </main>
</div>

</body>
</html>
