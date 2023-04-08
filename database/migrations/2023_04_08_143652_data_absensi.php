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
        Schema::create('data_absensi', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_ajaran_id')->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajaran');
            $table->integer('semester_id')->foreign('semester_id')->references('id')->on('semester');
            $table->integer('siswa_id')->foreign('siswa_id')->references('id')->on('siswa');
            $table->integer('status');
            $table->string('keterangan')->nullable();
            $table->date('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_absensi');
    }
};
