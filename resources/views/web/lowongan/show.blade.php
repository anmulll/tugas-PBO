@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-3xl font-bold">{{ $lowongan->judul }}</h1>

    <p class="mt-2 text-gray-700">{{ $lowongan->deskripsi }}</p>
    <p class="mt-2">Lokasi: {{ $lowongan->lokasi }}</p>

    <h3 class="text-xl mt-4 font-semibold">Kecocokan Skill: {{ $percent }}%</h3>

    @auth
        @if(Auth::user()->role === 'user')
        <form action="/lowongan/{{ $lowongan->id }}/lamar" method="POST" class="mt-4">
            @csrf
            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Lamar Pekerjaan
            </button>
        </form>
        @endif
    @endauth
</div>
@endsection
