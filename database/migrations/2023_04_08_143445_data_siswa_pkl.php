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
            $table->uuid('id')->primary();
            $table->foreignUuid('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreignUuid('mitra_perusahaan_id')->references('id')->on('mitra_perusahaan');
            $table->foreignUuid('tahun_ajaran_id')->references('id')->on('tahun_ajaran');
            $table->foreignUuid('semester_id')->references('id')->on('semester');
            $table->string('lama_pelaksanaan')->nullable();
            $table->string('nilai')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
