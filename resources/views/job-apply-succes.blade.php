<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Application Sent</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#E8EDF7]">
<div class="grid grid-cols-[260px_1fr] min-h-screen">
    {{-- SIDEBAR --}}
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

    {{-- MAIN + overlay modal --}}
    <main class="relative p-8">
        {{-- (background content bisa pakai card review sama seperti step review, tapi di-blur/diabaikan).
             Untuk simple kita kosongkan saja --}}

        {{-- Overlay --}}
        <div class="absolute inset-0 flex items-center justify-center bg-black/20">
            <div class="bg-gradient-to-b from-[#C9DBFF] to-white rounded-3xl shadow-2xl px-12 py-10 max-w-lg text-center">
                <div
                    class="w-16 h-16 rounded-full bg-white shadow flex items-center justify-center mx-auto mb-5">
                    <span class="text-3xl text-[#314779]">✔</span>
                </div>

                <h2 class="text-xl font-semibold text-gray-800 mb-3">
                    Application Sent Successfully!
                </h2>
                <p class="text-sm text-gray-600 mb-6">
                    Your job application has been submitted.<br>
                    We’ll notify you once the employer reviews it.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('jobs.finder') }}"
                       class="flex-1 inline-flex items-center justify-center rounded-full bg-[#314779] text-white text-sm font-medium px-6 py-3 shadow">
                        Back to Jobs Finder
                    </a>
                    <a href="{{ route('dashboard') }}"
                       class="flex-1 inline-flex items-center justify-center rounded-full border border-[#314779] text-[#314779] text-sm font-medium px-6 py-3 bg-white">
                        Go to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
