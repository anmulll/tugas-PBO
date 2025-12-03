<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id('idLamaran');

            $table->string('status')->default('submitted');

            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idLowongan');

            $table->foreign('idUser')
                ->references('idPengguna')->on('pengguna')
                ->onDelete('cascade');

            $table->foreign('idLowongan')
                ->references('idLowongan')->on('lowongan')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('lamaran');
    }
};