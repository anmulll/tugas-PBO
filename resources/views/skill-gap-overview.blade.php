<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skill Gap Overview – ProHire</title>
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

    {{-- ================= MAIN CONTENT ================= --}}
    <main class="p-10">

        {{-- TOP BAR --}}
        <div class="flex items-start justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard <span class="text-gray-500">› Skill Gap Overview</span>
            </h1>

            <div class="flex items-center gap-4">
                <button class="w-10 h-10 rounded-full bg-white shadow flex items-center justify-center">
                    🔔
                </button>
                <img src="https://i.pravatar.cc/100"
                     class="w-10 h-10 rounded-full shadow object-cover">
            </div>
        </div>

        {{-- SUMMARY BOX --}}
        <div class="bg-gradient-to-r from-blue-200 to-blue-50 rounded-2xl shadow mb-8 px-8 py-6 border border-blue-200">
            <h2 class="text-xl font-bold text-gray-800">
                Missing 3 Skills 🧩
            </h2>
            <p class="text-gray-600 text-sm mt-1">
                Focus on these key areas to unlock your next career opportunity.
            </p>
        </div>

        {{-- ================= SKILL ITEM 1 ================= --}}
        <div class="bg-white shadow rounded-3xl p-8 mb-8 border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">📊</span>
                    <h3 class="text-lg font-bold text-gray-800">Tableau</h3>
                </div>

                <span class="bg-gray-100 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">
                    Expected Level: Intermediate
                </span>
            </div>

            <div class="text-gray-700 text-sm leading-relaxed">
                <h4 class="font-semibold mb-1">Why This Skill Matters?</h4>
                <ul class="list-disc ml-5 mb-4">
                    <li>Able to transform complex raw data into easy-to-understand visualizations.</li>
                    <li>Accelerate decision-making processes using real-time insights.</li>
                    <li>Enhance data storytelling and presentation quality.</li>
                </ul>

                <h4 class="font-semibold mb-1">Why You're Missing?</h4>
                <p class="text-gray-600">
                    You have basic experience using spreadsheets and simple charts, but lack experience creating LOD dashboards, interactive visuals, and managing data blending in Tableau.
                </p>
            </div>
        </div>

        {{-- ================= SKILL ITEM 2 ================= --}}
        <div class="bg-white shadow rounded-3xl p-8 mb-8 border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">🧪</span>
                    <h3 class="text-lg font-bold text-gray-800">UX Testing</h3>
                </div>

                <span class="bg-gray-100 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">
                    Expected Level: Advanced
                </span>
            </div>

            <div class="text-gray-700 text-sm leading-relaxed">
                <h4 class="font-semibold mb-1">Why This Skill Matters?</h4>
                <ul class="list-disc ml-5 mb-4">
                    <li>Identify usability issues early before release.</li>
                    <li>Validate design solutions with real users.</li>
                    <li>Save time and reduce cost by fixing issues early.</li>
                </ul>

                <h4 class="font-semibold mb-1">Why You're Missing?</h4>
                <p class="text-gray-600">
                    You understand UX design well but lack hands-on experience conducting A/B Testing, usability studies, heuristic evaluations, and remote unmoderated testing.
                </p>
            </div>
        </div>

        {{-- ================= SKILL ITEM 3 ================= --}}
        <div class="bg-white shadow rounded-3xl p-8 mb-8 border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">🔍</span>
                    <h3 class="text-lg font-bold text-gray-800">Advanced Search</h3>
                </div>

                <span class="bg-gray-100 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">
                    Expected Level: Proficient
                </span>
            </div>

            <div class="text-gray-700 text-sm leading-relaxed">
                <h4 class="font-semibold mb-1">Why This Skill Matters?</h4>
                <ul class="list-disc ml-5 mb-4">
                    <li>Find highly relevant information from large data sources quickly.</li>
                    <li>Improve work efficiency and reduce time wasted searching irrelevant results.</li>
                    <li>Support strategic decisions with accurate data retrieval.</li>
                </ul>

                <h4 class="font-semibold mb-1">Why You're Missing?</h4>
                <p class="text-gray-600">
                    You rely on basic keywords. You're less familiar with Boolean search operators, platform-specific syntax, and data mining techniques for complex information retrieval.
                </p>
            </div>
        </div>

    </main>

</div>

</body>
</html>
