<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('uid')->primary();
            $table->string('nama');
            $table->string('email');
            $table->string('password'); // Tambahkan kolom password
            $table->string('role'); // Tambahkan kolom role
            $table->text('skills')->nullable();
            $table->string('id_perusahaan')->nullable(); // FK ke perusahaan
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_perusahaan')
                ->references('id_perusahaan')
                ->on('perusahaan')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};