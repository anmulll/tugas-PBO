<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekomendasi_kursus', function (Blueprint $table) {
            $table->id(); // Tambahkan primary key auto increment
            $table->string('nama_skill');
            $table->string('judul_kursus');
            $table->string('url');
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_kursus');
    }
};