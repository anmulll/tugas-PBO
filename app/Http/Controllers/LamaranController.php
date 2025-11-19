<?php
// Controller untuk CRUD lamaran

namespace App\Http\Controllers;

use App\Repositories\LamaranRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function __construct(private LamaranRepository $repository) {}

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
            'status' => 'required|string',
            'id_user' => 'required|exists:pengguna,uid',
            'id_lowongan' => 'required|exists:lowongan,id_lowongan',
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->repository->create($validated)
        ], 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'status' => 'string',
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
            'message' => 'Lamaran berhasil dihapus'
        ]);
    }
    public function myApplications(): JsonResponse
    {
        $userId = Auth::user()?->uid;
        return response()->json([
            'success' => true,
            'data' => $this->repository->getByUser($userId)
        ]);
    }
}
