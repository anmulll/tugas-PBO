<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    public function index()
    {
        $lamaran = Lamaran::with('pengguna', 'lowongan')->get();

        return view('company.lamaran.index', compact('lamaran'));
    }

    public function update(Request $request, $id)
    {
        $lamaran = Lamaran::findOrFail($id);

        $lamaran->update([
            'status' => $request->status,
            'catatan' => $request->catatan
        ]);

        return back()->with('success', 'Status lamaran diperbarui.');
    }
}
