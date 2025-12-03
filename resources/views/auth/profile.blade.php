<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile – ProHire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#E8EDF7]">

<div class="grid grid-cols-[250px_1fr] min-h-screen">

    {{-- =====================================================
        SIDEBAR
    ===================================================== --}}
    <aside class="bg-white shadow-lg px-6 py-8 flex flex-col">

        {{-- Logo --}}
        <div class="flex items-center gap-2 mb-6">
            <img src="{{ asset('storage/logotps.svg') }}" class="w-sm" alt="ProHire Logo">
        </div>

        {{-- Menu --}}
        <nav class="space-y-3 text-sm">
            <a href="#" class="block px-4 py-3 rounded-xl bg-[#D8E3FF] text-blue-900 font-medium">
                Dashboard
            </a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-600">
                Jobs Finder
            </a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-600">
                Skill Profile
            </a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-600">
                My Courses
            </a>
        </nav>
    </aside>

    {{-- =====================================================
        MAIN CONTENT
    ===================================================== --}}
    <main class="p-10">

        {{-- Top bar --}}
        <div class="flex items-start justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Edit Profile</h1>

            <div class="flex items-center gap-4">
                <button class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                    🔔
                </button>
                <img src="https://i.pravatar.cc/100"
                     class="w-10 h-10 rounded-full shadow object-cover" />
            </div>
        </div>

        <div class="space-y-8">

            {{-- ================= PROFILE SECTION ================= --}}
            <section class="grid md:grid-cols-[1.2fr_2fr] gap-8">

                {{-- LEFT – PROFILE PHOTO --}}
                <div class="bg-white rounded-3xl shadow p-8 flex flex-col items-center text-center">
                    <img src="https://i.pravatar.cc/150"
                         class="w-32 h-32 rounded-full object-cover mb-4 shadow" />

                    <h2 class="font-semibold text-gray-800 text-lg">Sabrina Carpenter</h2>

                    <button class="text-blue-700 mt-2 text-sm underline">
                        edit picture
                    </button>
                </div>

                {{-- RIGHT – FORM BASIC INFO --}}
                <div class="bg-white rounded-3xl shadow p-8 space-y-5">

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm font-semibold">First Name</label>
                            <input type="text" placeholder="Insert your first name"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm outline-none">
                        </div>

                        <div>
                            <label class="text-sm font-semibold">Last Name</label>
                            <input type="text" placeholder="Insert your last name"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm font-semibold">Country</label>
                            <input type="text" placeholder="Insert your country"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm">
                        </div>

                        <div>
                            <label class="text-sm font-semibold">Phone Number</label>
                            <input type="text" placeholder="Insert your phone number"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="text-sm font-semibold">Email</label>
                        <input type="email" placeholder="Insert your email"
                               class="mt-1 border border-blue-900 rounded-full px-4 py-2 text-sm w-full">
                    </div>

                </div>
            </section>


            {{-- ================= BIO + SOCIALS ================= --}}
            <section class="bg-white p-8 rounded-3xl shadow space-y-6">

                <div class="grid grid-cols-2 gap-6">

                    {{-- BIO --}}
                    <div>
                        <label class="font-semibold text-sm">Bio</label>
                        <textarea placeholder="Write about yourself"
                                  class="w-full mt-2 h-40 border border-blue-900 rounded-2xl p-4 text-sm outline-none"></textarea>
                    </div>

                    <div class="space-y-4">

                        <div>
                            <label class="text-sm font-semibold">LinkedIn</label>
                            <input placeholder="Insert your LinkedIn"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm">
                        </div>

                        <div>
                            <label class="text-sm font-semibold">Portfolio</label>
                            <input placeholder="Insert your portfolio"
                                   class="mt-1 w-full border border-blue-900 rounded-full px-4 py-2 text-sm">
                        </div>

                    </div>
                </div>
            </section>


            {{-- ================= PASSWORD + LOGOUT ================= --}}
            <section class="bg-white p-8 rounded-3xl shadow">

                <div class="grid grid-cols-3 gap-6 items-center">

                    <div class="col-span-2">
                        <label class="text-sm font-semibold">Current Password</label>
                        <div class="relative mt-2">
                            <input type="password"
                                   class="w-full border border-blue-900 rounded-full px-4 py-2 text-sm outline-none"
                                   placeholder="********">

                            <button class="absolute right-3 top-2.5 text-gray-600 text-lg">
                                👁️
                            </button>
                        </div>
                    </div>

                    <div class="flex justify-end items-center">
                        <button class="px-6 py-2 rounded-full bg-[#314779] text-white font-medium shadow text-sm">
                            Logout
                        </button>
                    </div>

                </div>

            </section>

        </div>

    </main>
</div>

</body>
</html>
