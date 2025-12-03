<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebAuthController extends Controller
{
    public function registerStep1()
{
    return view('auth.register.step1');
}

public function registerStep1Post(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    session([
        'reg_email' => $request->email,
        'reg_password' => $request->password,
    ]);

    return redirect()->route('register.step2');
}

public function registerStep2()
{
    return view('auth.register.step2');
}

public function registerStep2Post(Request $request)
{
    session([
        'reg_firstname' => $request->firstname,
        'reg_lastname' => $request->lastname,
    ]);

    return redirect()->route('register.step3');
}

public function registerStep3()
{
    return view('auth.register.step3');
}

public function registerStep3Post(Request $request)
{
    session([
        'reg_status' => $request->status,
    ]);

    return redirect()->route('register.step4');
}

public function registerStep4()
{
    return view('auth.register.step4');
}

public function completeRegister(Request $request)
{
    session(['reg_expertise' => $request->expertise]);

    // CREATE USER
    $user = User::create([
        'name' => session('reg_firstname') . ' ' . session('reg_lastname'),
        'email' => session('reg_email'),
        'password' => session('reg_password'),
        'role' => 'user'
    ]);

    // CREATE PROFIL PENGGUNA
    Pengguna::create([
        'user_id' => $user->id,
        'nama' => $user->name,
        'email' => $user->email,
        'skills' => json_encode([session('reg_expertise')]),
    ]);

    Auth::login($user);

    return redirect('/dashboard')->with('success', 'Welcome to ProHire!');
}

    /* ============================
        SHOW LOGIN FORM
    ============================= */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /* ============================
        HANDLE LOGIN
    ============================= */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }

    /* ============================
        DASHBOARD
    ============================= */
    public function dashboard()
    {
        return view('dashboard');
    }

    /* ============================
        LOGOUT
    ============================= */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
