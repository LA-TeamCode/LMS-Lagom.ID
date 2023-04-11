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
        Schema::create('data_beasiswa_siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // I. ket perkembangan peserta didik
            $table->foreignUuid('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->string('beasiswa_dari');
            $table->string('tahun_menerima_beasiswa');
            $table->string('kelas_menerima_beasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_beasiswa_siswa');
    }
};
