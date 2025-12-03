<?php
// Controller untuk web view perusahaan

namespace App\Http\Controllers;

use App\Repositories\PerusahaanRepository;

class WebPerusahaanController extends Controller
{
    public function __construct(private PerusahaanRepository $repository) {}

    public function index()
    {
        $perusahaan = $this->repository->getAll();
        return view('perusahaan', compact('perusahaan'));
    }
}