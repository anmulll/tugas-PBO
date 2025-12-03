@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lowongan Perusahaan</h1>

<a href="/company/lowongan/create" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Lowongan</a>

@foreach($lowongan as $l)
    <div class="bg-white p-4 rounded shadow mt-3">
        <h2 class="text-xl">{{ $l->judul }}</h2>
        <p>{{ $l->lokasi }}</p>
    </div>
@endforeach
@endsection
