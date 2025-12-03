<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Apply Job | Upload Document</title>
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

    {{-- MAIN --}}
    <main class="p-8">
        {{-- Top bar --}}
        <div class="flex justify-between items-start mb-8">
            <h1 class="text-xl font-semibold text-gray-800">Jobs Finder &gt; Applied</h1>
            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}"><img src="{{ asset('storage/notif.svg') }}" class="w-10"></a>
                <a href="{{ route('saved.jobs') }}"><img src="{{ asset('storage/save.svg') }}" class="w-10"></a>
                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow">
            </div>
        </div>

        {{-- Stepper --}}
        <div class="mb-8">
            <div class="flex rounded-full overflow-hidden shadow-sm bg-white">
                <div class="flex-1 bg-[#C4D2F6] text-blue-900 text-sm font-medium py-3 text-center">
                    Personal Details
                </div>
                <div class="flex-1 bg-[#314779] text-white text-sm font-medium py-3 text-center">
                    Upload Document
                </div>
                <div class="flex-1 bg-[#C4D2F6] text-blue-900 text-sm font-medium py-3 text-center">
                    Final Review
                </div>
            </div>
        </div>

        {{-- Card --}}
        <section class="bg-white rounded-3xl shadow p-8 max-w-3xl">
            <p class="text-sm text-gray-600 mb-6">
                Upload your document.
            </p>

            <h2 class="font-semibold text-gray-800 mb-2 text-sm">Upload your CV</h2>
            <a href="{{ route('skill.review.cv') }}" class="text-xs text-blue-700 underline mb-4 inline-block">
                Review your CV
            </a>

            {{-- Dropzone --}}
            <div class="border-2 border-[#25335A] border-dashed rounded-3xl px-6 py-10 flex flex-col items-center mb-6">
                <div class="w-12 h-12 rounded-full border border-[#25335A] flex items-center justify-center mb-3">
                    <span class="text-2xl">☁️</span>
                </div>
                <p class="text-sm font-medium text-gray-700 text-center">
                    Choose a file or drag &amp; drop it here.
                </p>
                <p class="text-xs text-gray-500 text-center mt-1">
                    txt, docx, pdf, jpeg, xlsx – Up to 50MB
                </p>

                <button
                    class="mt-5 px-6 py-2 rounded-full border border-[#25335A] text-sm text-[#25335A] font-medium">
                    Browse File
                </button>
            </div>

            <div class="space-y-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        LinkedIn (Optional)
                    </label>
                    <input type="text" placeholder="Insert your LinkedIn"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Portfolio / GitHub / Website link (Optional)
                    </label>
                    <input type="text" placeholder="Insert your portfolio"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('jobs.apply.personal') }}"
                   class="inline-flex items-center justify-center rounded-full border border-[#314779] text-[#314779] text-sm font-medium px-8 py-3">
                    &lt; Back
                </a>
                <a href="{{ route('jobs.apply.review') }}"
                   class="inline-flex items-center justify-center rounded-full bg-[#314779] text-white text-sm font-medium px-8 py-3 shadow">
                    Next &gt;
                </a>
            </div>
        </section>
    </main>
</div>
</body>
</html>
