<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ProHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="flex w-full max-w-6xl bg-white rounded-xl shadow-lg overflow-hidden">

            <!-- LEFT PANEL -->
            <div class="hidden md:flex flex-col justify-center">
                <!-- Background Decoration -->
                <img src="{{ asset('storage/Group 742.svg') }}" alt="" class="w-full">
            </div>

            <!-- RIGHT PANEL -->
            <div class="flex flex-col justify-center w-full md:w-1/2    p-10">

                <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back to ProHire!</h2>
                <p class="text-gray-500 mb-6">Please enter your details to sign in your account</p>

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="font-medium">Email</label>
                        <input type="email"
                               name="email"
                               placeholder="example@gmail.com"
                               required
                               class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="font-medium">Password</label>
                        <div class="relative">
                            <input type="password"
                                   name="password"
                                   placeholder="minimum 8 characters"
                                   required
                                   class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
                        </div>
                    </div>

                    <!-- Remember me + Forgot -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember" class="rounded">
                            Remember me
                        </label>

                        <a href="#" class="text-blue-600 hover:underline">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button
                        class="w-full bg-[#314779] hover:bg-blue-700 text-white p-3 rounded-lg font-medium transition">
                        Login
                    </button>

                    @if ($errors->any())
                        <p class="text-red-500 text-sm">{{ $errors->first() }}</p>
                    @endif
                </form>

                <!-- OR LINE -->
                <div class="flex items-center my-6">
                    <div class="flex-1 h-px bg-gray-300"></div>
                    <span class="mx-4 text-gray-400">Or sign in with</span>
                    <div class="flex-1 h-px bg-gray-300"></div>
                </div>

                <!-- SOCIAL BUTTONS -->
                <div class="space-y-3">
                    <button class="w-full border rounded-xl p-3 flex items-center justify-center gap-3 hover:bg-gray-50">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                        Continue with Google
                    </button>

                    <button class="w-full border rounded-xl p-3 flex items-center justify-center gap-3 hover:bg-gray-50">
                        <img src="{{ asset('storage/apple.svg') }}" class="w-5">
                        Continue with Apple
                    </button>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
