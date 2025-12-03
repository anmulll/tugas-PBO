<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soft Skill – ProHire</title>
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

        {{-- Top Bar --}}
        <div class="flex justify-between items-start mb-6">
            <h1 class="text-xl font-bold text-gray-800">Skill Profile › Edit Soft Skill</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}">
                    <img src="{{ asset('storage/notif.svg') }}" class="w-10">
                </a>
                <a href="{{ route('saved.jobs') }}">
                    <img src="{{ asset('storage/save.svg') }}" class="w-10">
                </a>
                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
            </div>
        </div>

        {{-- GRID CONTENT --}}
        <div class="grid grid-cols-[2fr_1fr] gap-6">

            {{-- ================= LEFT SIDE (FORM) ================= --}}
            <div class="bg-white rounded-3xl shadow p-8 space-y-6">

                {{-- Skill Name --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Skill Name</p>
                    <input type="text"
                           placeholder="Masukkan nama skill"
                           class="w-full border border-gray-300 rounded-full px-4 py-3 focus:outline-none">
                </div>

                {{-- Level --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-2">Level</p>
                    <div class="flex gap-2 flex-wrap">
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Beginner</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Intermediate</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Advanced</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Expert</button>
                    </div>
                </div>

                {{-- Experience --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Experience (Optional)</p>
                    <textarea
                        placeholder="Describe your experience here"
                        class="w-full border border-gray-300 rounded-2xl px-4 py-3 h-32 resize-none"></textarea>
                </div>

                {{-- Save --}}
                <button class="px-6 py-3 bg-[#314779] text-white rounded-full shadow">
                    Save Skill
                </button>
            </div>

            {{-- ================= RIGHT SIDE ================= --}}
            <div class="bg-white rounded-3xl shadow p-8">

                <p class="font-semibold text-gray-700 mb-1">Registered Skill</p>
                <p class="text-xs text-gray-500 mb-4">
                    Below are the skills you’ve added. You may update or delete them when needed.
                </p>

                <div class="space-y-3">

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <span>Communication</span>
                        <div class="flex gap-2">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <span>Problem Solving</span>
                        <div class="flex gap-2">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <span>Teamwork</span>
                        <div class="flex gap-2">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </main>

</div>

</body>
</html>
