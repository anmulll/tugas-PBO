<?php
// Controller untuk web view lamaran

namespace App\Http\Controllers;

use App\Repositories\LamaranRepository;
use Illuminate\Support\Facades\Auth;

class WebLamaranController extends Controller
{
    public function __construct(private LamaranRepository $repository) {}

    public function index()
    {
        $lamaran = $this->repository->getByUser(Auth::user()->uid);
        return view('pages.lamaran', compact('lamaran'));
    }
}