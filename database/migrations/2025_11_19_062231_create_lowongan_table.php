<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->string('id_lowongan')->primary();
            $table->string('judul');
            $table->text('skill_dibutuhkan'); // List<String>
            $table->string('id_perusahaan');  // FK

            $table->foreign('id_perusahaan')
                ->references('id_perusahaan')
                ->on('perusahaan');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};