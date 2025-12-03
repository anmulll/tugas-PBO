<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review CV – ProHire</title>
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
            <h1 class="text-xl font-bold text-gray-800">Skill Profile › Review CV</h1>

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

        {{-- GRID = CV + SCORE + RECOMMENDATION --}}
        <div class="grid grid-cols-[2fr_1fr] gap-6">

            {{-- ================= LEFT: CV Preview ================= --}}
            <div class="bg-white rounded-3xl shadow p-10 flex flex-col items-center">

                <div class="border border-gray-300 shadow-md bg-white rounded-xl overflow-hidden p-8 w-full max-w-xl">
                    <img src="{{ asset('storage/sample-cv.jpg') }}" alt="cv preview" class="w-full object-contain">
                </div>

                <button class="mt-6 px-6 py-3 rounded-full bg-[#314779] text-white text-sm shadow hover:bg-[#263862]">
                    Update CV
                </button>

            </div>

            {{-- ================= RIGHT: SCORE & RECOMMENDATION ================= --}}
            <div class="space-y-6">

                {{-- Score Section --}}
                <div class="bg-white rounded-3xl shadow p-8 text-center">
                    <p class="text-lg font-semibold text-blue-900">Overall Score</p>

                    <div class="flex justify-center my-6">
                        <svg width="150" height="150">
                            <circle cx="75" cy="75" r="60" stroke="#E5E7EB" stroke-width="12" fill="none"/>
                            <circle cx="75" cy="75" r="60" stroke="#3B5998" stroke-width="12" fill="none"
                                    stroke-dasharray="377" stroke-dashoffset="140"
                                    stroke-linecap="round"/>
                        </svg>
                        <div class="absolute mt-14 text-center">
                            <p class="text-3xl font-bold text-blue-900">63%</p>
                            <p class="text-xs text-gray-500">Match Score</p>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600">Needs Improvement</p>
                </div>

                {{-- Recommendation --}}
                <div class="bg-white rounded-3xl shadow p-8">
                    <p class="text-lg font-semibold text-blue-900 mb-3">Recommendation</p>

                    <ul class="text-sm text-gray-700 space-y-3 ml-4 list-disc">
                        <li>Add measurable achievements in your work experience.</li>
                        <li>Include a skills summary for clearer scanning.</li>
                        <li>Consider reducing your CV length to 2 pages.</li>
                    </ul>

                    <button class="mt-6 w-full flex items-center justify-between bg-[#E6EEFF] text-blue-900 px-4 py-3 rounded-xl font-medium shadow text-sm">
                        <span>15 relevant keywords found for UI/UX Designer role</span>
                        <span class="text-lg">→</span>
                    </button>
                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>
