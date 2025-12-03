<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Skill Profile</title>
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

        <div class="flex justify-between items-start mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Skill Profile</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}" class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/notif.svg') }}" alt="Notification" class="w-12 h-auto">
                </a>

                <a href="{{ route('saved.jobs') }}" class="flex items-center justify-center text-gray-600">
                    <img src="{{ asset('storage/save.svg') }}" alt="save" class="w-12 h-auto">
                </a>

                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
            </div>
        </div>

        {{-- PROFILE HEADER --}}
        <div class="grid grid-cols-[2fr_1fr] gap-4 mb-6">

            {{-- Profile Info --}}
            <div class="bg-gradient-to-r from-[#C7D9F7] to-[#E2EAF9] rounded-2xl shadow p-6 flex items-center gap-4">
                <img src="https://i.pravatar.cc/120" class="w-20 h-20 rounded-full shadow">

                <div>
                    <h2 class="text-lg font-semibold text-blue-900">Sabrina Carpenter</h2>
                    <p class="text-sm text-gray-700">Undergraduate Student at Indonesian University</p>
                    <p class="text-sm text-gray-700">Depok, Indonesia</p>

                    <button class="mt-3 px-6 py-2 bg-[#314779] text-white text-xs rounded-full shadow">
                        Review CV
                    </button>
                </div>
            </div>

            {{-- Skill Match + Skill Total --}}
            <div class="flex flex-col gap-4">

                <div class="bg-white shadow rounded-2xl px-6 py-4 text-sm">
                    <p class="font-semibold text-blue-900">% Skill Match: 12/15</p>
                    <a class="text-xs text-blue-800 underline">See full match</a>
                </div>

                <div class="bg-white shadow rounded-2xl px-6 py-4 text-sm">
                    <p class="font-semibold text-blue-900">Skill Set: 12</p>
                </div>

            </div>

        </div>

        {{-- MAIN GRID (Hard Skills – Soft Skills – Experience) --}}
        <div class="grid grid-cols-2 gap-6">

            {{-- HARD SKILLS --}}
            <div class="bg-[#DDE7F9] rounded-2xl shadow p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('storage/hard-icon.svg') }}" class="w-8">
                        <h3 class="font-bold text-lg text-blue-900">Hard Skills</h3>
                    </div>

                    <button class="text-xs px-4 py-2 bg-[#314779] text-white rounded-full shadow">
                        Edit
                    </button>
                </div>

                <div class="bg-white rounded-xl p-6 text-sm leading-relaxed">

                    <ul class="space-y-2">
                        <li>
                            <strong>Data Analysis</strong>
                            <p class="text-gray-500 text-xs">Tools: Microsoft Excel, Tableau, Python</p>
                        </li>

                        <li>
                            <strong>MySQL</strong>
                            <p class="text-gray-500 text-xs">Tools: MySQL, PostgreSQL, DBeaver</p>
                        </li>

                        <li>
                            <strong>UI/UX Design</strong>
                            <p class="text-gray-500 text-xs">Tools: Figma, Adobe XD, Sketch</p>
                        </li>

                        <li>
                            <strong>Graphic Design</strong>
                            <p class="text-gray-500 text-xs">Tools: Adobe Photoshop, Adobe Illustrator</p>
                        </li>
                    </ul>

                </div>
            </div>

            {{-- SOFT SKILLS --}}
            <div class="bg-[#DDE7F9] rounded-2xl shadow p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('storage/soft-icon.svg') }}" class="w-8">
                        <h3 class="font-bold text-lg text-blue-900">Soft Skills</h3>
                    </div>

                    <button class="text-xs px-4 py-2 bg-[#314779] text-white rounded-full shadow">
                        Edit
                    </button>
                </div>

                <div class="bg-white rounded-xl p-6 text-sm">
                    <ul class="list-disc ml-4 space-y-2">
                        <li>Communication</li>
                        <li>Teamwork</li>
                        <li>Problem Solving</li>
                        <li>Time Management</li>
                    </ul>
                </div>
            </div>

            {{-- EXPERIENCE --}}
            <div class="bg-[#DDE7F9] rounded-2xl shadow p-6 col-span-2">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('storage/experience-icon.svg') }}" class="w-8">
                        <h3 class="font-bold text-lg text-blue-900">Experience</h3>
                    </div>

                    <button class="text-xs px-4 py-2 bg-[#314779] text-white rounded-full shadow">
                        Edit
                    </button>
                </div>

                <div class="bg-white rounded-xl p-6 text-sm leading-relaxed">

                    <ul class="space-y-3">
                        <li>
                            <strong>UI/UX Designer Intern</strong>
                            <p class="text-gray-500 text-xs">PT Digital Maju (2023)</p>
                        </li>

                        <li>
                            <strong>Graphic Designer</strong>
                            <p class="text-gray-500 text-xs">Freelance (2022–2024)</p>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </main>

</div>

</body>
</html>
