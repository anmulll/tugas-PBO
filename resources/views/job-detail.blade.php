<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Designer – Pickolab Studio | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#E8EDF7]">

    {{-- ================= TOP NAV ================= --}}
    <header class="flex items-center justify-between px-8 py-4 bg-[#E8EDF7]">
        <div class="flex items-center gap-4">
            {{-- hamburger --}}
            <button class="w-10 h-10 rounded-full bg-white shadow flex items-center justify-center">
                <span class="w-5 h-[2px] bg-gray-700 block mb-1"></span>
                <span class="w-5 h-[2px] bg-gray-700 block mb-1"></span>
                <span class="w-5 h-[2px] bg-gray-700 block"></span>
            </button>

            {{-- logo --}}
            <div class="flex items-center gap-2">
                <img src="{{ asset('storage/logotps.svg') }}" class="h-8" alt="ProHire Logo">
            </div>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('notification.index') }}">
                <img src="{{ asset('storage/notif.svg') }}" class="w-10" alt="Notification">
            </a>
            <a href="{{ route('saved.jobs') }}">
                <img src="{{ asset('storage/save.svg') }}" class="w-10" alt="Saved Jobs">
            </a>
            <img src="https://i.pravatar.cc/100" class="w-10 h-10 rounded-full shadow" alt="User Avatar">
        </div>
    </header>

    <main class="px-8 pb-10">

        {{-- ================= HERO / BANNER ================= --}}
        <section class="mt-2 mb-8">
            <div class="rounded-3xl overflow-hidden shadow-lg bg-gradient-to-r from-[#152047] to-[#4E7FFF]">
                {{-- kalau punya banner sendiri di storage, ganti src di bawah --}}
                <img src="{{ asset('storage/pickolab-banner.jpg') }}"
                     alt="Pickolab Banner"
                     class="w-full h-64 object-cover">
            </div>
        </section>

        {{-- ================= JOB TITLE & SUMMARY 2-COLUMN ================= --}}
        <section class="grid grid-cols-[minmax(0,2fr)_minmax(0,1.1fr)] gap-8 mb-10">

            {{-- ===== LEFT: ABOUT / REQUIREMENTS ===== --}}
            <div>
                {{-- Job header --}}
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-black flex items-center justify-center text-yellow-300 text-2xl">
                        ✦
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">UI/UX Designer</h1>
                        <p class="text-sm text-gray-700">Pickolab Studio</p>
                        <p class="text-xs text-gray-500 mt-1">
                            Semarang, Central Java | Posted 15 days ago
                        </p>
                    </div>
                </div>

                {{-- About Us --}}
                <div class="mb-6">
                    <h2 class="font-semibold text-gray-900 mb-2">About Us</h2>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Pickolab Studio, based in Semarang, Central Java, is seeking a creative, experienced,
                        and dedicated UI/UX Designer to join our team. In this role, you will be pivotal in
                        developing engaging and user-friendly digital products for our clients. We are looking
                        for candidates with a sharp design vision, up-to-date knowledge of design trends, and
                        the ability to translate ideas into exceptional visual solutions.
                    </p>
                </div>

                {{-- Responsibilities --}}
                <div class="mb-6">
                    <h2 class="font-semibold text-gray-900 mb-2">Responsibilities</h2>
                    <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1">
                        <li>Design intuitive and visually appealing user interfaces for our web and mobile applications.</li>
                        <li>Conduct user research, analysis, and testing to understand user needs and behaviors.</li>
                        <li>Develop wireframes, prototypes, and mockups to test and refine design concepts.</li>
                        <li>Collaborate with the development team to ensure smooth design implementation.</li>
                        <li>Monitor and analyze design performance and make adjustments based on user feedback.</li>
                        <li>Ensure all visual designs remain consistent with the company’s brand and visual identity.</li>
                    </ul>
                </div>

                {{-- Requirements --}}
                <div>
                    <h2 class="font-semibold text-gray-900 mb-2">Requirements</h2>
                    <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1">
                        <li>Degree in Visual Communication Design, IT, or equivalent practical experience.</li>
                        <li>Minimum 2 years of experience as a UI/UX Designer in a digital product environment.</li>
                        <li>Strong portfolio showcasing innovative and high-quality user interface design projects.</li>
                        <li>Proficient knowledge of Design Principles, UX, and Human-Centered Design.</li>
                        <li>Proficiency in design tools such as Figma, Sketch, Adobe Creative Cloud, and prototyping tools.</li>
                        <li>Solid understanding of current design trends and technological advancements.</li>
                        <li>Ability to collaborate with cross-functional teams in a fast-paced environment.</li>
                    </ul>
                </div>
            </div>

            {{-- ===== RIGHT: JOB SUMMARY / POSTED BY ===== --}}
            <div class="space-y-6">

                {{-- Job summary --}}
                <div class="bg-white rounded-3xl shadow p-6 space-y-4">
                    <p class="text-xs text-gray-500">Semarang | 15 days ago</p>

                    <div class="flex items-center gap-2">
                        <span class="text-sm">💰</span>
                        <p class="font-semibold text-gray-900 text-sm">
                            Rp 2.750.000 – Rp 3.500.000/month
                        </p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-gray-900 mb-2">Details</p>

                        <div class="space-y-2 text-xs text-gray-700">
                            <div class="flex justify-between">
                                <span>Job Function</span>
                                <span class="font-medium">Desain Web & Interaksi</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Industry</span>
                                <span class="font-medium">Desain & Arsitektur</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Type of Job</span>
                                <span class="font-medium">Part Time</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Looking for</span>
                                <span class="font-medium">02 People</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Job posted by --}}
                <div class="bg-white rounded-3xl shadow p-6 space-y-4">
                    <p class="text-sm font-semibold text-gray-900 mb-2">Job Posted By</p>

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-yellow-300">
                            ✦
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Pickolab Studio</p>
                            <p class="text-xs text-gray-500">Desain & Pengembangan Digital</p>
                        </div>
                    </div>

                    <p class="text-xs text-gray-700 leading-relaxed">
                        Pickolab Studio, based in Semarang, Central Java, is seeking a creative, experienced,
                        and dedicated UI/UX Designer in our digital product team. We focus on delivering
                        user-friendly digital experiences across platforms with strong visual consistency.
                    </p>

                    <button class="mt-2 w-full py-2 rounded-full bg-[#314779] text-white text-xs shadow">
                        5 open jobs
                    </button>
                </div>

            </div>
        </section>

        {{-- ================= SKILL MATCH OVERVIEW ================= --}}
        <section class="bg-white rounded-3xl shadow p-8">
            <h2 class="font-semibold text-gray-900 mb-4">Skill Match Overview</h2>

            <div class="grid grid-cols-[minmax(0,1.2fr)_minmax(0,2fr)] gap-6 items-center">

                {{-- Circle score --}}
                <div class="flex flex-col items-center">
                    <div class="relative w-52 h-52 flex items-center justify-center">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-[#9BB7FF] to-[#4F6BBF] shadow-lg">
                        </div>
                        <div class="absolute inset-4 rounded-full bg-[#E8EDF7]"></div>

                        <div class="relative text-center px-6">
                            <p class="text-4xl font-bold text-white mb-1">88%</p>
                            <p class="text-xs text-white">Match Score</p>
                            <p class="mt-4 text-[11px] text-[#1C2A4A]">
                                You're a good fit for most of this role’s skills.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Skills you have / missing --}}
                <div class="space-y-4">

                    <div>
                        <p class="text-sm font-semibold text-gray-900 mb-2 flex items-center gap-2">
                            <span>⭐</span> Skills You Have
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1 rounded-full bg-[#E6EEFF] text-[#314779]">UI/UX Design</span>
                            <span class="px-3 py-1 rounded-full bg-[#E6EEFF] text-[#314779]">Graphic Design</span>
                            <span class="px-3 py-1 rounded-full bg-[#E6EEFF] text-[#314779]">Figma</span>
                            <span class="px-3 py-1 rounded-full bg-[#E6EEFF] text-[#314779]">Photoshop</span>
                            <span class="px-3 py-1 rounded-full bg-[#E6EEFF] text-[#314779]">Front End</span>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-gray-900 mb-2 flex items-center gap-2">
                            <span>⚠️</span> Skills You’re Missing
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1 rounded-full bg-[#FFE8E8] text-[#B63131]">React.js</span>
                            <span class="px-3 py-1 rounded-full bg-[#FFE8E8] text-[#B63131]">REST API</span>
                            <span class="px-3 py-1 rounded-full bg-[#FFE8E8] text-[#B63131]">UX Research</span>
                        </div>
                    </div>

                </div>

            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                <button
                    class="w-full md:w-48 py-3 rounded-full bg-[#314779] text-white text-sm font-medium shadow hover:bg-[#263862]">
                    Apply
                </button>

                <button
                    class="w-full md:w-48 py-3 rounded-full bg-white border border-gray-300 text-sm text-gray-800 flex items-center justify-center gap-2 shadow-sm">
                    <span>⭐</span>
                    <span>Save for later</span>
                </button>
            </div>
        </section>

    </main>

</body>
</html>
