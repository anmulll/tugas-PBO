<?php
// Controller untuk CRUD perusahaan

namespace App\Http\Controllers;

use App\Repositories\PerusahaanRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function __construct(private PerusahaanRepository $repository) {}

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
            'nama_perusahaan' => 'required|string',
            'deskripsi' => 'required|string',
            'logo_url' => 'required|string',
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->repository->create($validated)
        ], 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'string',
            'deskripsi' => 'string',
            'logo_url' => 'string',
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
            'message' => 'Perusahaan berhasil dihapus'
        ]);
    }
}