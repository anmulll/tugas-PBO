<?php
// Form request untuk validasi registrasi

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:pengguna,company',
            'skills' => 'nullable|array',
            'id_perusahaan' => 'nullable|exists:perusahaan,id_perusahaan',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 6 karakter',
            'role.in' => 'Role harus pengguna atau company',
        ];
    }
}