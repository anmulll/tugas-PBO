<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experience – ProHire</title>
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
            <h1 class="text-xl font-bold text-gray-800">Skill Profile › Edit Experience</h1>

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

        {{-- GRID: LEFT FORM + RIGHT REGISTERED --}}
        <div class="grid grid-cols-[2fr_1fr] gap-6">

            {{-- ================= LEFT FORM ================= --}}
            <div class="bg-white rounded-3xl shadow p-8 space-y-6">

                {{-- Position --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Position / Role</p>
                    <input type="text"
                           placeholder="e.g., UI/UX Researcher"
                           class="w-full border border-gray-300 rounded-full px-4 py-3">
                </div>

                {{-- Company --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Company / Institution</p>
                    <input type="text"
                           placeholder="Insert your company or institution"
                           class="w-full border border-gray-300 rounded-full px-4 py-3">
                </div>

                {{-- Experience Type --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-2">Experience Type</p>
                    <div class="flex gap-2 flex-wrap">
                        <button class="px-4 py-2 rounded-full border border-gray-400">Internship</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400">Freelance</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400">Full-time</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400">Part-time</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400">Volunteer</button>
                        <button class="px-4 py-2 rounded-full border border-gray-400">Project-based (College/community)</button>
                    </div>
                </div>

                {{-- Duration --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Duration of Experience</p>
                    <select class="w-full border border-gray-300 rounded-full px-4 py-3">
                        <option>Select Duration</option>
                        <option>1–3 Months</option>
                        <option>3–6 Months</option>
                        <option>6–12 Months</option>
                        <option>1–2 Years</option>
                        <option>2+ Years</option>
                    </select>
                </div>

                {{-- Upload Proof --}}
                <div>
                    <p class="font-semibold text-gray-700 mb-1">Upload Proof (Optional)</p>
                    <div class="border border-gray-300 rounded-2xl py-10 text-center text-gray-500">
                        <div class="text-3xl mb-2">☁️</div>
                        <p class="text-sm font-medium">Upload supporting documents</p>
                        <p class="text-xs">(internship letter, volunteer certificate, portfolio, etc.)</p>
                    </div>
                </div>

                {{-- Save Button --}}
                <button class="px-6 py-3 bg-[#314779] text-white rounded-full shadow">
                    Save Skill
                </button>

            </div>

            {{-- ================= RIGHT REGISTERED EXPERIENCE ================= --}}
            <div class="bg-white rounded-3xl shadow p-8">

                <p class="font-semibold text-gray-700 mb-1">Registered Experience</p>
                <p class="text-xs text-gray-500 mb-4">Update or delete your experiences as needed.</p>

                <div class="space-y-3">

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <div>
                            <p class="font-medium">UI/UX Intern</p>
                            <p class="text-xs text-gray-500">Tokopedia</p>
                        </div>
                        <div class="flex gap-2">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <div>
                            <p class="font-medium">Video Editor</p>
                            <p class="text-xs text-gray-500">Freelance</p>
                        </div>
                        <div class="flex gap-2">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between border border-gray-300 rounded-full px-4 py-2">
                        <div>
                            <p class="font-medium">Project Leader</p>
                            <p class="text-xs text-gray-500">Campus Event</p>
                        </div>
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
