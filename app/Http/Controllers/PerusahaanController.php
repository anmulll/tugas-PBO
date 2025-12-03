<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerusahaanController extends Controller
{
    public function index()
    {
        $data = Perusahaan::where('user_id', Auth::id())->first();

        return view('company.profile.index', compact('data'));
    }

    public function update(Request $request)
    {
        $perusahaan = Perusahaan::where('user_id', Auth::id())->first();

        $perusahaan->update($request->all());

        return back()->with('success', 'Profil perusahaan diperbarui.');
    }
}
