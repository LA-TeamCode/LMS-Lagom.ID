<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_prestasi_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id')->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->string('prestasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('tanggal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_prestasi_siswa');
    }
};
