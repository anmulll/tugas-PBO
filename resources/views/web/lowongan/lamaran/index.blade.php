@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lamaran Saya</h1>

@foreach($lamaran as $l)
    <div class="bg-white p-4 rounded shadow mb-3">
        <h2 class="text-xl">{{ $l->lowongan->judul }}</h2>
        <p>Perusahaan: {{ $l->lowongan->perusahaan->nama }}</p>

        <p>Status: 
            <span class="font-bold {{ $l->status === 'accepted' ? 'text-green-600' : ($l->status === 'rejected' ? 'text-red-600' : 'text-blue-600') }}">
                {{ ucfirst($l->status) }}
            </span>
        </p>

        @if($l->catatan)
            <p class="text-gray-600">Catatan: {{ $l->catatan }}</p>
        @endif
    </div>
@endforeach
@endsection
