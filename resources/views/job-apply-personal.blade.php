<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Apply Job | Personal Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#E8EDF7]">

<div class="grid grid-cols-[260px_1fr] min-h-screen">
    {{-- =============== SIDEBAR =============== --}}
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

    {{-- =============== MAIN =============== --}}
    <main class="p-8">
        {{-- Top bar --}}
        <div class="flex justify-between items-start mb-8">
            <div>
                <h1 class="text-xl font-semibold text-gray-800">Jobs Finder &gt; Applied</h1>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('notification.index') }}" class="flex items-center justify-center">
                    <img src="{{ asset('storage/notif.svg') }}" class="w-10 h-auto" alt="Notification">
                </a>
                <a href="{{ route('saved.jobs') }}" class="flex items-center justify-center">
                    <img src="{{ asset('storage/save.svg') }}" class="w-10 h-auto" alt="Saved Jobs">
                </a>
                <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow" alt="Avatar">
            </div>
        </div>

        {{-- STEP INDICATOR --}}
        <div class="mb-8">
            <div class="flex rounded-full overflow-hidden shadow-sm bg-white">
                <div class="flex-1 bg-[#314779] text-white text-sm font-medium py-3 px-6 text-center">
                    Personal Details
                </div>
                <div class="flex-1 bg-[#C4D2F6] text-blue-900 text-sm font-medium py-3 px-6 text-center">
                    Upload Document
                </div>
                <div class="flex-1 bg-[#C4D2F6] text-blue-900 text-sm font-medium py-3 px-6 text-center">
                    Final Review
                </div>
            </div>
        </div>

        {{-- FORM CARD --}}
        <section class="bg-white rounded-3xl shadow p-8">
            <p class="text-sm text-gray-600 mb-6">
                Make sure your details are up to date.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                    <input type="text" placeholder="Insert your first name"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                    <input type="text" placeholder="Insert your last name"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                    <input type="text" placeholder="Insert your country"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="text" placeholder="Insert your phone number"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" placeholder="Insert your email"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm focus:outline-none">
                </div>
            </div>

            <div class="md:col-span-2 mt-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Bio (Optional)</label>
                <textarea rows="4" placeholder="Write about yourself"
                          class="w-full rounded-3xl border border-[#25335A] px-4 py-3 text-sm focus:outline-none"></textarea>
            </div>

            <div class="flex justify-end mt-8">
                <a href="{{ route('jobs.apply.upload') }}"
                   class="inline-flex items-center justify-center rounded-full bg-[#314779] text-white text-sm font-medium px-8 py-3 shadow">
                    Next &gt;
                </a>
            </div>
        </section>
    </main>
</div>

</body>
</html>
