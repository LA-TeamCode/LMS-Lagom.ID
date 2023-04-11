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
        Schema::create('data_pendidikan_siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            //D. ket pendidikan sebelumnya
            $table->string('asal_sekolah')->nullable();
            $table->string('tanggal_ijazah_smp')->nullable();
            $table->string('nomor_ijazah_smp')->nullable();
            $table->string('tanggal_skhun_smp')->nullable();
            $table->string('nomor_skhun_smp')->nullable();
            $table->string('lama_belajar')->nullable();
            ######
            $table->text('alasan_pindah')->nullable();
            ######
            $table->string('diterima_di_kelas')->nullable();
            $table->string('diterima_pada_tanggal')->nullable();
            ######
            $table->date('tanggal_meninggalkan_sekolah')->nullable();
            $table->string('alasan_meninggalkan_sekolah')->nullable();
            ######
            $table->year('tahun_kelulusan')->nullable();
            $table->string('nomor_ijazah_lulus')->nullable();
            $table->date('tanggal_ijazah_lulus')->nullable();
            $table->string('nomor_skhun_lulus')->nullable();
            $table->date('tanggal_skhun_lulus')->nullable();

            $table->boolean('status_pindahan')->default(false);
            $table->boolean('status_meninggalkan_sekolah')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pendidikan_siswa');
    }
};
