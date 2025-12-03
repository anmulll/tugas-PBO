<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class WebLamaranController extends Controller
{
    public function store($id)
    {
        $user = Pengguna::where('user_id', Auth::id())->first();
        $lowongan = Lowongan::findOrFail($id);

        Lamaran::create([
            'pengguna_id' => $user->id,
            'lowongan_id' => $lowongan->id,
            'status' => 'submitted'
        ]);

        return back()->with('success', 'Lamaran berhasil dikirim.');
    }

    public function index()
    {
        $user = Pengguna::where('user_id', Auth::id())->first();

        $lamaran = Lamaran::with('lowongan.perusahaan')
            ->where('pengguna_id', $user->id)
            ->latest()
            ->get();

        return view('web.lamaran.index', compact('lamaran'));
    }
}
