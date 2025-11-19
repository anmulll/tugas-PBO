<?php
// Service untuk handle authentication logic

namespace App\Services;

use App\Repositories\PenggunaRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function __construct(
        private PenggunaRepository $penggunaRepository,
        private EmailValidationService $emailValidator
    ) {}

    public function register(array $data): array
    {
        if (!$this->emailValidator->validate($data['email'], $data['role'])) {
            throw ValidationException::withMessages([
                'email' => ['Email tidak sesuai dengan role yang dipilih']
            ]);
        }

        $data['password'] = Hash::make($data['password']);
        $pengguna = $this->penggunaRepository->create($data);
        $token = $pengguna->createToken('auth_token')->plainTextToken;

        return [
            'user' => $pengguna,
            'token' => $token,
        ];
    }

    public function login(array $credentials): array
    {
        $pengguna = $this->penggunaRepository->findByEmail($credentials['email']);

        if (!$pengguna || !Hash::check($credentials['password'], $pengguna->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email atau password salah']
            ]);
        }

        $token = $pengguna->createToken('auth_token')->plainTextToken;

        return [
            'user' => $pengguna,
            'token' => $token,
        ];
    }
}