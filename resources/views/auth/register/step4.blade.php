<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up – Step 4 | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col items-center pt-10">

        <!-- Logo -->
        <div class="w-full max-w-6xl">
            <img src="{{ asset('storage/logo.svg') }}" class="w-32 ml-6">
        </div>

        <!-- Progress Steps (Step 4 Active) -->
        <div class="flex space-x-4 mt-6">
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
            <div class="h-2 w-20 bg-[#D9E2F3] rounded-full"></div>
            <div class="h-2 w-20 bg-[#314779] rounded-full"></div>
        </div>

        <!-- Content Area -->
        <div class="w-full max-w-xl mt-14">

            <!-- Title Text -->
            <div class="text-center mb-10">
                <h1 class="text-2xl font-bold text-gray-900">
                    Choose Your Field of Study or Expertise
                </h1>
                <p class="text-gray-500 mt-2">
                    Select your field to personalize your job and skill recommendations.
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register.complete') }}" class="space-y-8">
                @csrf

                <!-- Dropdown Input -->
                <select 
                    name="expertise" 
                    required
                    class="w-full p-3 border-2 border-gray-300 rounded-full bg-white text-gray-700
                           focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none transition text-lg">

                    <option value="">Choose your field</option>
                    <option value="Technology and Computing">Technology and Computing</option>
                    <option value="Business and Management">Business and Management</option>
                    <option value="Creative and Design">Creative and Design</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Social Sciences and Humanities">Social Sciences and Humanities</option>
                    <option value="Health and Medicine">Health and Medicine</option>
                    <option value="Education and Teaching">Education and Teaching</option>
                    <option value="Science and Environment">Science and Environment</option>

                </select>

                <!-- Button -->
                <button 
                    class="w-full bg-[#314779] hover:bg-blue-800 text-white py-3 rounded-full
                           font-semibold text-lg shadow transition flex items-center justify-center gap-2">
                    Continue to Dashboard
                    <span>➜</span>
                </button>
                
            </form>

        </div>

    </div>

</body>
</html>
