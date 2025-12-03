<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notification – ProHire</title>
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

    {{-- ================= MAIN ================= --}}
    <main class="p-10">

        {{-- TOP BAR --}}
        <div class="flex items-start justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Notification</h1>

            <div class="flex items-center gap-4">
                <button class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                    🔔
                </button>
                <img src="https://i.pravatar.cc/100"
                     class="w-10 h-10 rounded-full shadow object-cover" />
            </div>
        </div>

        {{-- SEARCH BAR --}}
        <div class="mb-6">
            <div class="bg-white rounded-full shadow flex items-center px-5 py-3">
                <span class="text-gray-400 mr-3">🔍</span>
                <input type="text"
                       class="w-full text-sm focus:outline-none"
                       placeholder="Search for something here...">
            </div>
        </div>

        {{-- NOTIFICATION LIST CARD --}}
        <section class="bg-white rounded-3xl shadow px-6 py-4">
            <ul class="divide-y divide-gray-100">

                {{-- 1. Password changed --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 text-xl">
                            🔒
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold mb-1">
                                Account
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Password changed
                            </p>
                            <p class="text-xs text-gray-500">
                                Your password has been successfully changed.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        27 Nov 2025 at 3.28 AM
                    </p>
                </li>

                {{-- 2. New job posted --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xs font-bold">
                            JOB
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-green-100 text-green-700 font-semibold mb-1">
                                New Job
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                PT Jaya Evogad Mandiri post a new job
                            </p>
                            <p class="text-xs text-gray-500">
                                Fresh opportunity! A new role is now available in your preferred industry.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        25 Nov 2025 at 22.08 PM
                    </p>
                </li>

                {{-- 3. Application submitted --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-blue-700 text-xl">
                            📄
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold mb-1">
                                Application
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Application submitted
                            </p>
                            <p class="text-xs text-gray-500">
                                CV uploaded! Your profile has been sent to the employer.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        3 Nov 2025 at 1.56 PM
                    </p>
                </li>

                {{-- 4. Send your CV now (alert) --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 text-xl">
                            ⚠️
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-red-100 text-red-600 font-semibold mb-1">
                                Alert
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Send your CV now!
                            </p>
                            <p class="text-xs text-gray-500">
                                Hurry! The application deadline for this job is in 24 hours.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        1 Oct 2025 at 8.12 AM
                    </p>
                </li>

                {{-- 5. New message from employer --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-xl">
                            💬
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold mb-1">
                                Application
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                New Message from Employer
                            </p>
                            <p class="text-xs text-gray-500">
                                You've passed the initial screening. The employer wants to continue the process.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        18 Oct 2025 at 2.00 PM
                    </p>
                </li>

                {{-- 6. Another application submitted --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-blue-700 text-xl">
                            📄
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold mb-1">
                                Application
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Application submitted
                            </p>
                            <p class="text-xs text-gray-500">
                                CV uploaded! Your profile has been sent to the employer.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        2 Oct 2025 at 9.27 AM
                    </p>
                </li>

                {{-- 7. Add more information --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 text-xl">
                            🔔
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold mb-1">
                                Account
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Add More Information
                            </p>
                            <p class="text-xs text-gray-500">
                                Strengthen your chances: upload your portfolio.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        13 Sep 2025 at 3.08 AM
                    </p>
                </li>

                {{-- 8. Complete your profile --}}
                <li class="flex items-start justify-between py-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 text-xl">
                            🔔
                        </div>
                        <div>
                            <span class="inline-block text-[10px] px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold mb-1">
                                Account
                            </span>
                            <p class="text-sm font-semibold text-gray-800">
                                Complete Your Profile
                            </p>
                            <p class="text-xs text-gray-500">
                                Your profile is 70% complete. Add more skills to get better matches.
                            </p>
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-400 whitespace-nowrap">
                        12 Sep 2025 at 12.08 PM
                    </p>
                </li>

            </ul>
        </section>

    </main>
</div>

</body>
</html>
