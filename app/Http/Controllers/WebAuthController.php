<?php
// Controller untuk web authentication

namespace App\Http\Controllers;

use App\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebAuthController extends Controller
{
    public function __construct(private AuthService $authService) {}

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        if ($request->has('skills_json')) {
            $validated['skills'] = json_decode($request->skills_json, true);
        }

        try {
            $result = $this->authService->register($validated);
            Auth::login($result['user']);
            return redirect()->route('dashboard')->with('success', 'Registrasi berhasil!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['email' => $e->getMessage()]);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $result = $this->authService->login($request->validated());
            Auth::login($result['user'], $request->filled('remember'));
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form')->with('success', 'Logout berhasil!');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}