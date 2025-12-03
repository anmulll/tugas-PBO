<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up – Step 2 | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col items-center pt-10">

        <!-- Logo -->
        <div class="w-full max-w-6xl">
            <img src="{{ asset('storage/logo.svg') }}" class="w-32 ml-6">
        </div>

        <!-- Progress Steps -->
        <div class="flex space-x-4 mt-6">
            <div class="h-2 w-20 bg-[#314779] rounded-full"></div>
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
        </div>

        <!-- Content Area -->
        <div class="w-full max-w-xl mt-14">

            <!-- Title -->
            <div class="text-center mb-10">
                <h1 class="text-2xl font-bold text-gray-900">
                    Complete Your Name Information
                </h1>

                <p class="text-gray-500 mt-2">
                    Please provide your full name and preferred name to personalize your profile.
                </p>
            </div>

            <!-- Form -->
            <form action="{{ route('register.step2') }}" method="POST" class="space-y-6">
                @csrf

                <!-- First Name -->
                <div>
                    <label class="font-semibold text-gray-800">First Name</label>
                    <input type="text" name="firstname"
                        placeholder="Enter your first name"
                        required
                        class="w-full mt-1 p-3 border-2 border-gray-300 rounded-xl
                               focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none transition">
                </div>

                <!-- Last Name -->
                <div>
                    <label class="font-semibold text-gray-800">Last Name</label>
                    <input type="text" name="lastname"
                        placeholder="Enter your last name"
                        required
                        class="w-full mt-1 p-3 border-2 border-gray-300 rounded-xl
                               focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none transition">
                </div>

                <!-- Next Button -->
                <button
                    class="w-full bg-[#314779] hover:bg-blue-800 text-white py-3 rounded-xl
                           font-semibold text-lg shadow transition flex items-center justify-center gap-2">
                    Next
                    <span>➜</span>
                </button>

            </form>

        </div>

    </div>

</body>
</html>
