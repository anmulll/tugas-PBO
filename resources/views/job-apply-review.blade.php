<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProHire – Apply Job | Final Review</title>
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
                <div class="flex-1 bg-[#C4D2F6] text-blue-900 text-sm font-medium py-3 text-center">
                    Upload Document
                </div>
                <div class="flex-1 bg-[#314779] text-white text-sm font-medium py-3 text-center">
                    Final Review
                </div>
            </div>
        </div>

        {{-- Final review card (data statis saja) --}}
        <section class="bg-white rounded-3xl shadow p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">First Name</label>
                    <input type="text" value="Sabrina"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">Last Name</label>
                    <input type="text" value="Carpenter"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">Country</label>
                    <input type="text" value="Indonesia"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">Phone Number</label>
                    <input type="text" value="+62 123 4567 8910"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-gray-500 mb-1">Email</label>
                    <input type="email" value="SabrinaCarpenter@gmail.com"
                           class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
                </div>
            </div>

            {{-- CV --}}
            <div class="mt-4">
                <label class="block text-xs font-semibold text-gray-500 mb-1">CV</label>
                <div
                    class="flex items-center justify-between rounded-2xl border border-[#25335A] px-4 py-3 text-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-10 bg-red-500 text-white flex items-center justify-center text-xs font-bold rounded">
                            PDF
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">my-CV.pdf</p>
                            <p class="text-[11px] text-gray-500">74 KB of 74 KB • Completed</p>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-red-500">
                        🗑
                    </button>
                </div>
            </div>

            {{-- Portfolio --}}
            <div class="mt-4">
                <label class="block text-xs font-semibold text-gray-500 mb-1">
                    Portfolio / GitHub / Website link (Optional)
                </label>
                <input type="text" value="https://portfolio.sabrina-design.com"
                       class="w-full rounded-full border border-[#25335A] px-4 py-2.5 text-sm bg-white">
            </div>

            {{-- Checkbox --}}
            <div class="mt-6 space-y-2 text-xs text-gray-700">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-400">
                    <span>I confirm all information is accurate.</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-400">
                    <span>I agree to share my data with employer.</span>
                </label>
            </div>

            <div class="flex justify-between mt-8">
                <a href="{{ route('jobs.apply.upload') }}"
                   class="inline-flex items-center justify-center rounded-full border border-[#314779] text-[#314779] text-sm font-medium px-8 py-3">
                    &lt; Back
                </a>
                <a href="{{ route('jobs.apply.success') }}"
                   class="inline-flex items-center justify-center rounded-full bg-[#314779] text-white text-sm font-medium px-8 py-3 shadow">
                    Submit Application
                </a>
            </div>
        </section>
    </main>
</div>
</body>
</html>
