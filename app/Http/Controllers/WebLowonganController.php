<?php
// Controller untuk web view lowongan

namespace App\Http\Controllers;

use App\Repositories\LowonganRepository;
use App\Services\SkillAnalyzerService;
use Illuminate\Support\Facades\Auth;

class WebLowonganController extends Controller
{
    public function __construct(
        private LowonganRepository $repository,
        private SkillAnalyzerService $skillAnalyzer
    ) {}

    public function index()
    {
        $lowongan = $this->repository->getAll();
        if (Auth::check() && Auth::user()->skills) {
            foreach ($lowongan as $item) {
                $item->kesesuaian = $item->hitungKesesuaian(Auth::user()->skills);
            }
            $lowongan = $lowongan->sortByDesc('kesesuaian');
    }

    return view('pages.lowongan', compact('lowongan'));
}

    public function show(string $id)
    {
        $lowongan = $this->repository->getById($id);
        $analisa = null;
        if (Auth::check() && Auth::user()->skills) {
            $analisa = $this->skillAnalyzer->analisaKesesuaian(Auth::user()->skills, $id);
        }

        return view('pages.lowongan-detail', compact('lowongan', 'analisa'));
    }

}