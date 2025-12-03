<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up – Step 3 | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <div class="min-h-screen flex flex-col items-center pt-10">

        {{-- Logo --}}
        <div class="w-full max-w-6xl">
            <img src="{{ asset('storage/logo.svg') }}" class="w-32 ml-6">
        </div>

        {{-- Progress bar (step 3 aktif) --}}
        <div class="flex space-x-4 mt-6">
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
            <div class="h-2 w-20 bg-[#314779] rounded-full"></div>
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
        </div>

        {{-- Content --}}
        <div class="w-full max-w-3xl mt-14">

            <div class="text-center mb-10">
                <h1 class="text-2xl font-bold text-gray-900">
                    Set Your Current Status
                </h1>
                <p class="text-gray-500 mt-2">
                    Select the option that best represents your current academic or professional position.
                </p>
            </div>

            <form method="POST" action="{{ route('register.step3') }}">
                @csrf

                {{-- Grid pilihan status --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    {{-- Kolom kiri --}}
                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Student" class="mr-3">
                        <span class="text-gray-800">Student</span>
                    </label>

                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Employed (Part-Time / Full-Time)" class="mr-3">
                        <span class="text-gray-800">Employed (Part-Time / Full-Time)</span>
                    </label>

                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Fresh Graduate" class="mr-3">
                        <span class="text-gray-800">Fresh Graduate</span>
                    </label>

                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Freelancer" class="mr-3">
                        <span class="text-gray-800">Freelancer</span>
                    </label>

                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Unemployed / Job Seeker" class="mr-3">
                        <span class="text-gray-800">Unemployed / Job Seeker</span>
                    </label>

                    <label class="flex items-center px-5 py-3 border-2 border-gray-300 rounded-full cursor-pointer hover:border-blue-500 transition">
                        <input type="radio" name="status" value="Intern" class="mr-3">
                        <span class="text-gray-800">Intern</span>
                    </label>
                </div>

                {{-- Tombol Next --}}
                <button
                    class="w-full md:w-64 mx-auto mt-10 block bg-[#314779] hover:bg-blue-800 text-white py-3 rounded-full font-semibold text-lg shadow transition flex items-center justify-center gap-2">
                    Next
                    <span>➜</span>
                </button>

            </form>
        </div>

    </div>

</body>
</html>
