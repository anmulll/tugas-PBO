<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'JobMatch' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow p-4 flex justify-between">
        <a href="/" class="font-bold text-xl">JobMatch</a>

        <div class="flex space-x-4">
            @auth
                @if(Auth::user()->role === 'user')
                    <a href="/lamaran">Lamaran Saya</a>
                    <a href="/kursus">Rekomendasi Kursus</a>
                @endif

                @if(Auth::user()->role === 'company')
                    <a href="/company/lowongan">Lowongan Perusahaan</a>
                    <a href="/company/lamaran">Pelamar</a>
                @endif

                <form method="POST" action="/logout">
                    @csrf
                    <button class="text-red-500">Logout</button>
                </form>
            @else
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endauth
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>
