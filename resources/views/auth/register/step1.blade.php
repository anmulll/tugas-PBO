<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center px-4">
    <div class="flex w-full max-w-6xl bg-white rounded-xl shadow-lg overflow-hidden">

        <!-- Left Panel -->
        <div class="hidden md:flex flex-col justify-center">
                <!-- Background Decoration -->
                <img src="{{ asset('storage/Group 742.svg') }}" alt="" class="w-full">
            </div>

        <!-- Right Panel -->
        <div class="flex flex-col justify-center w-full md:w-1/2 p-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-3">Let’s Get Started with ProHire!</h2>
            <p class="text-gray-500 mb-6">Enter your email and password to begin your registration.</p>

            <form action="{{ route('register.step1') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label class="font-medium">Email</label>
                    <input type="email" name="email"
                           class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"
                           placeholder="example@gmail.com" required>
                </div>

                <!-- Password -->
                <div>
                    <label class="font-medium">Password</label>
                    <input type="password" name="password"
                           class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"
                           placeholder="minimum 8 characters" required>
                </div>

                <!-- Checkbox -->
                <label class="flex items-center gap-2 text-sm">
                    <input type="checkbox" class="rounded" required>
                    I agree to the processing of my information.
                </label>

                <button class="w-full bg-[#314779] hover:bg-blue-700 text-white p-3 rounded-lg font-medium transition">
                    Sign Up
                </button>
            </form>

            <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gray-300"></div>
                <span class="mx-2 text-gray-400">or</span>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <!-- Social auth -->
            <button class="w-full border p-3 rounded-xl flex items-center justify-center gap-3 hover:bg-gray-50">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                Continue with Google
            </button>

            <button class="w-full border p-3 rounded-xl flex items-center justify-center gap-3 hover:bg-gray-50 mt-3">
                <img src="{{ asset('storage/apple.svg') }}" class="w-5">
                Continue with Apple
            </button>

        </div>
    </div>
</div>

</body>
</html>
