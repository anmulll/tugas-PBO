@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>

    <form method="POST" action="/register">
        @csrf

        <label>Nama</label>
        <input type="text" name="name" class="w-full p-2 border rounded mb-3" required>

        <label>Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded mb-3" required>

        <label>Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded mb-3" required>

        <label>Daftar Sebagai</label>
        <select name="role" class="w-full p-2 border rounded mb-3">
            <option value="user">Pencari Kerja</option>
            <option value="company">Perusahaan</option>
        </select>

        <button class="w-full bg-green-500 text-white p-2 rounded">Register</button>
    </form>

    <p class="text-center mt-3">
        Sudah punya akun? <a href="/login" class="text-blue-600">Login</a>
    </p>

</div>
@endsection
