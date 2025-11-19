<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Job Portal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-blue-600">Job Portal</a>
                <div class="flex items-center space-x-6">
                    @guest
                        <a href="{{ route('login.form') }}" class="text-gray-600 hover:text-blue-600">Login</a>
                        <a href="{{ route('register.form') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Daftar</a>
                    @else
                        <a href="{{ route('lowongan.index') }}" class="text-gray-600 hover:text-blue-600">Lowongan</a>
                        <a href="{{ route('perusahaan.index') }}" class="text-gray-600 hover:text-blue-600">Perusahaan</a>
                        @if(auth()->user()->role === 'pengguna')
                            <a href="{{ route('lamaran.index') }}" class="text-gray-600 hover:text-blue-600">Lamaran Saya</a>
                        @endif
                        <span class="text-gray-700 font-medium">{{ auth()->user()->nama }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button class="text-red-600 hover:text-red-700">Logout</button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>