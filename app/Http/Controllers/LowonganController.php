<?php
// Controller untuk CRUD lowongan dan skill analyzer

namespace App\Http\Controllers;

use App\Repositories\LowonganRepository;
use App\Services\SkillAnalyzerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    public function __construct(
        private LowonganRepository $repository,
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
            'judul' => 'required|string',
            'skill_dibutuhkan' => 'required|array',
            'id_perusahaan' => 'required|exists:perusahaan,id_perusahaan',
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->repository->create($validated)
        ], 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'judul' => 'string',
            'skill_dibutuhkan' => 'array',
            'id_perusahaan' => 'exists:perusahaan,id_perusahaan',
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
            'message' => 'Lowongan berhasil dihapus'
        ]);
    }
    public function analisaKesesuaian(Request $request, string $id): JsonResponse
    {
        $user = Auth::user();
        $analisa = $this->skillAnalyzer->analisaKesesuaian($user->skills ?? [], $id);

        return response()->json([
            'success' => true,
            'data' => $analisa
        ]);
    }

    public function searchBySkills(Request $request): JsonResponse
    {
        $skills = $request->input('skills', []);
        $lowongan = $this->repository->searchBySkills($skills) ?? [];

        return response()->json([
            'success' => true,
            'data' => $lowongan
        ]);
    }
}