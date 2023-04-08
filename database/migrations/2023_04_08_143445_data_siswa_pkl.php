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
        Schema::create('data_siswa_pkl', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id')->foreign('siswa_id')->references('id')->on('siswa');
            $table->integer('mitra_perusahaan_id')->foreign('mitra_perusahaan_id')->references('id')->on('mitra_perusahaan');
            $table->integer('tahun_ajaran_id')->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajaran');
            $table->integer('semester_id')->foreign('semester_id')->references('id')->on('semester');
            $table->string('lama_pelaksanaan')->nullable();
            $table->string('nilai')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa_pkl');
    }
};
