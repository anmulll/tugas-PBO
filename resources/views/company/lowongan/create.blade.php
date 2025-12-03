@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Lowongan</h1>

<form method="POST" action="/company/lowongan/store" class="bg-white p-6 rounded shadow max-w-xl">
    @csrf

    <label>Judul</label>
    <input type="text" name="judul" class="w-full p-2 border rounded mb-3">

    <label>Deskripsi</label>
    <textarea name="deskripsi" class="w-full p-2 border rounded mb-3"></textarea>

    <label>Lokasi</label>
    <input type="text" name="lokasi" class="w-full p-2 border rounded mb-3">

    <label>Gaji Minimum</label>
    <input type="number" name="gaji_min" class="w-full p-2 border rounded mb-3">

    <label>Gaji Maksimum</label>
    <input type="number" name="gaji_max" class="w-full p-2 border rounded mb-3">

    <button class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
