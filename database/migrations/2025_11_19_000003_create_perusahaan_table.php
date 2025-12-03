<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id('idPerusahaan');

            $table->unsignedBigInteger('user_id')->unique();

            $table->string('namaPerusahaan');
            $table->text('deskripsi')->nullable();
            $table->string('logoUrl')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('perusahaan');
    }
};