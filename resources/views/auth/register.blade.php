@extends('layouts.app')
@section('title', 'Daftar Akun')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun Baru</h2>
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama') }}" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('nama') border-red-500 @enderror" 
                   required>
            @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('email') border-red-500 @enderror" 
                   required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Password</label>
            <input type="password" name="password" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('password') border-red-500 @enderror" 
                   required>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Daftar Sebagai</label>
            <select name="role" id="roleSelect" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('role') border-red-500 @enderror" 
                    required>
                <option value="">Pilih Role</option>
                <option value="pengguna" {{ old('role') == 'pengguna' ? 'selected' : '' }}>Pencari Kerja</option>
                <option value="company" {{ old('role') == 'company' ? 'selected' : '' }}>Perusahaan</option>
            </select>
            @error('role')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <p class="text-sm text-gray-500 mt-1">
                <span id="emailHint"></span>
            </p>
        </div>

        <div class="mb-6" id="skillsDiv" style="display: none;">
            <label class="block text-gray-700 font-semibold mb-2">Skills (opsional)</label>
            <input type="text" name="skills_input" id="skillsInput" 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" 
                   placeholder="PHP, Laravel, MySQL">
            <input type="hidden" name="skills_json" id="skillsJson">
            <p class="text-sm text-gray-500 mt-1">Pisahkan dengan koma</p>
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 font-semibold">
            Daftar
        </button>
    </form>

    <p class="text-center mt-4 text-gray-600">
        Sudah punya akun? 
        <a href="{{ route('login.form') }}" class="text-blue-600 hover:underline">Login disini</a>
    </p>
</div>

<script>
    const roleSelect = document.getElementById('roleSelect');
    const emailHint = document.getElementById('emailHint');
    const skillsDiv = document.getElementById('skillsDiv');
    const skillsInput = document.getElementById('skillsInput');
    const skillsJson = document.getElementById('skillsJson');

    roleSelect.addEventListener('change', function() {
        if (this.value === 'pengguna') {
            emailHint.textContent = '⚠️ Email harus @gmail.com';
            emailHint.className = 'text-blue-600 font-semibold';
            skillsDiv.style.display = 'block';
        } else if (this.value === 'company') {
            emailHint.textContent = '⚠️ Email harus @company.com';
            emailHint.className = 'text-orange-600 font-semibold';
            skillsDiv.style.display = 'none';
        } else {
            emailHint.textContent = '';
            skillsDiv.style.display = 'none';
        }
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        const skills = skillsInput.value.trim();
        if (skills) {
            const skillsArray = skills.split(',').map(s => s.trim()).filter(s => s);
            skillsJson.value = JSON.stringify(skillsArray);
        }
    });
</script>
@endsection