@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Pelamar</h1>

@foreach($lamaran as $l)
    <div class="bg-white p-4 rounded shadow mb-3">
        <h2 class="text-xl">{{ $l->pengguna->nama }}</h2>
        <p>Melamar posisi: {{ $l->lowongan->judul }}</p>

        <form action="/company/lamaran/{{ $l->id }}/update" method="POST" class="mt-3">
            @csrf

            <select name="status" class="p-2 border rounded">
                <option value="submitted">Submitted</option>
                <option value="reviewed">Reviewed</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
            </select>

            <input type="text" name="catatan" placeholder="Catatan" class="p-2 border rounded">

            <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endforeach
@endsection
