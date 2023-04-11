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
        Schema::create('data_orangtua_siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            // E. ket ayah kandung
            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('kewarganegaraan_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('no_hp_ayah')->nullable();
            $table->string('pengeluaran_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            // F. ket ibu kandung
            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('kewarganegaraan_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->string('pengeluaran_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            // G. ket wali
            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('pengeluaran_wali')->nullable();
            $table->string('status_wali')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orangtua_siswa');
    }
};
