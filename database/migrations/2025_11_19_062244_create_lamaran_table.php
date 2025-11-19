<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->string('id_lamaran')->primary();
            $table->string('status');
            $table->string('id_user');       // FK pengguna.uid
            $table->string('id_lowongan');   // FK lowongan.id_lowongan

            $table->foreign('id_user')
                ->references('uid')
                ->on('pengguna');

            $table->foreign('id_lowongan')
                ->references('id_lowongan')
                ->on('lowongan');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lamaran');
    }
};