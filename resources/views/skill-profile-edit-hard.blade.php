<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hard Skill – ProHire</title>
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
            <h1 class="text-xl font-bold text-gray-800">Skill Profile › Edit Hard Skill</h1>

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
                           placeholder="e.g., Project Management"
                           class="w-full border border-gray-300 rounded-full px-4 py-3 focus:outline-none">
                </div>

                {{-- Proficiency Level --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-2">Proficiency Level</p>
                    <div class="flex gap-2 flex-wrap">
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Beginner</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Intermediate</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Advanced</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">Expert</button>
                    </div>
                </div>

                {{-- Duration --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Duration of Experience</p>
                    <select class="w-full border border-gray-300 rounded-full px-4 py-3 text-gray-600">
                        <option>Select Duration</option>
                        <option>Less than 1 year</option>
                        <option>1–2 years</option>
                        <option>3–5 years</option>
                        <option>More than 5 years</option>
                    </select>
                </div>

                {{-- Portfolio --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Portfolio (Optional)</p>
                    <input type="text"
                           placeholder="Paste Link Here"
                           class="w-full border border-gray-300 rounded-full px-4 py-3">
                </div>

                {{-- Certificate Upload --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Certificate</p>
                    <div class="border-2 border-gray-300 border-dashed rounded-2xl py-10 text-center text-gray-500">
                        <div class="text-3xl mb-2">☁️</div>
                        <p>Upload Certificate</p>
                        <p class="text-xs">or drop file</p>
                    </div>
                </div>

                {{-- Save --}}
                <button class="px-6 py-3 bg-[#314779] text-white rounded-full shadow">
                    Save Skill
                </button>
            </div>

            {{-- ================= RIGHT SIDE ================= --}}
            <div class="space-y-6">

                {{-- Tools --}}
                <div class="bg-white rounded-3xl shadow p-6">
                    <p class="font-semibold text-gray-700">Tools</p>
                    <p class="text-xs text-gray-500 mb-3">Add tools that complement your skill.</p>

                    <input type="text"
                           placeholder="e.g., MySQL"
                           class="w-full border border-gray-300 rounded-full px-4 py-3">
                </div>

                {{-- Registered Skills --}}
                <div class="bg-white rounded-3xl shadow p-6">
                    <p class="font-semibold text-gray-700">Registered Skill</p>
                    <p class="text-xs text-gray-500 mb-3">Below are the skills you’ve added.</p>

                    {{-- List --}}
                    <div class="space-y-3">

                        <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                            <span>SQL Querying</span>
                            <div class="flex gap-2">
                                <button>✏️</button>
                                <button>🗑️</button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                            <span>UI/UX Design</span>
                            <div class="flex gap-2">
                                <button>✏️</button>
                                <button>🗑️</button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                            <span>Data Analysis</span>
                            <div class="flex gap-2">
                                <button>✏️</button>
                                <button>🗑️</button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </main>

</div>

</body>
</html>
