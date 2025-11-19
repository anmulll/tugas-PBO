<?php
// Controller untuk CRUD rekomendasi kursus

namespace App\Http\Controllers;

use App\Repositories\RekomendasiKursusRepository;
use App\Services\SkillAnalyzerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekomendasiKursusController extends Controller
{
    public function __construct(
        private RekomendasiKursusRepository $repository,
        private SkillAnalyzerService $skillAnalyzer
    ) {}

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->getAll()
        ]);
    }

    public function show(string $id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->getById($id)
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nama_skill' => 'required|string',
            'judul_kursus' => 'required|string',
            'url' => 'required|string',
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->repository->create($validated)
        ], 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'nama_skill' => 'string',
            'judul_kursus' => 'string',
            'url' => 'string',
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->repository->update($id, $validated)
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->repository->delete($id);
        return response()->json([
            'success' => true,
            'message' => 'Rekomendasi kursus berhasil dihapus'
        ]);
    }
    public function rekomendasiUntukLowongan(string $idLowongan): JsonResponse
    {
        $user = Auth::user();
        $analisa = $this->skillAnalyzer->analisaKesesuaian($user->skills ?? [], $idLowongan);
        $rekomendasi = $this->skillAnalyzer->rekomendasiKursus($analisa['skill_kurang']);

        return response()->json([
            'success' => true,
            'data' => [
                'analisa' => $analisa,
                'rekomendasi_kursus' => $rekomendasi,
            ]
        ]);
    }
}