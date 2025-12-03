<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id('idLowongan');

            $table->string('judul');
            $table->json('skillDibutuhkan')->nullable();

            $table->unsignedBigInteger('idPerusahaan');
            $table->foreign('idPerusahaan')
                ->references('idPerusahaan')->on('perusahaan')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('lowongan');
    }
};
