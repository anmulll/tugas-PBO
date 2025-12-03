<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::where('user_id', Auth::id())->first();
        $lowongan = $perusahaan->lowongan()->latest()->get();

        return view('company.lowongan.index', compact('lowongan'));
    }

    public function create()
    {
        return view('company.lowongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
        ]);

        $perusahaan = Perusahaan::where('user_id', Auth::id())->first();

        Lowongan::create([
            'perusahaan_id' => $perusahaan->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'gaji_min' => $request->gaji_min,
            'gaji_max' => $request->gaji_max,
            'tipe' => $request->tipe,
        ]);

        return redirect()->route('company.lowongan.index')
            ->with('success', 'Lowongan berhasil dibuat.');
    }
}
