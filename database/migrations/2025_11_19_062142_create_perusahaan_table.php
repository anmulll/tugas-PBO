<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->string('id_perusahaan')->primary();
            $table->string('nama_perusahaan');
            $table->string('deskripsi');
            $table->string('logo_url');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};