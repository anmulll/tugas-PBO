<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class WebLowonganController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::with('perusahaan')->latest()->paginate(10);

        return view('web.lowongan.index', compact('lowongan'));
    }

    public function show($id)
    {
        $lowongan = Lowongan::with('perusahaan')->findOrFail($id);

        $userSkill = Pengguna::where('user_id', Auth::id())->first()?->skill ?? [];
        $requiredSkill = explode(',', $lowongan->deskripsi);

        $match = count(array_intersect($userSkill, $requiredSkill));
        $percent = round(($match / count($requiredSkill)) * 100);

        return view('web.lowongan.show', compact('lowongan', 'percent'));
    }
}
