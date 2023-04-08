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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            //A. keterangan siswa
            $table->integer('komli_id')->foreign('komli_id')->references('id')->on('komli');
            $table->integer('nisn')->default(0);
            $table->string('no_induk')->nullable()->default('0');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->string('jumlah_saudara_tiri')->nullable();
            $table->string('jumlah_saudara_angkat')->nullable();
            $table->string('bahasa')->nullable();
            //B. ket tempat tinggal
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('tinggal_dengan')->nullable();
            $table->string('jarak_rumah_ke_sekolah')->nullable();
            //C. ket kesehatan
            $table->string('golongan_darah')->nullable();
            $table->string('penyakit_pernah_diderita')->nullable();
            $table->string('kelainan_jasmani')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();

            $table->string('bidang_keahlian')->nullable();
            $table->string('program_keahlian')->nullable();
            $table->string('keahlian')->nullable();
            // H. ket peserta didik
            $table->string('kesenian')->nullable();
            $table->string('olahraga')->nullable();
            $table->string('organisasi')->nullable();
            $table->string('lainnya')->nullable();
            // J. ket setelah lulus
            $table->string('melanjutkan_ke')->nullable();
            $table->string('nama_perusahaan_bekerja')->nullable();
            $table->date('tanggal_masuk_perusahaan_bekerja')->nullable();
            $table->string('penghasilan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
