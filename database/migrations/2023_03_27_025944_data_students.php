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
        Schema::create('data_students', function (Blueprint $table) {
            $table->id('id_student');
            //A. keterangan siswa
            $table->integer('id_komli')->nullable()->default(0);
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
            //D. ket pendidikan sebelumnya
            $table->string('asal_sekolah')->nullable();
            $table->string('tanggal_ijazah')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->string('tanggal_skhun')->nullable();
            $table->string('nomor_skhun')->nullable();
            $table->string('lama_belajar')->nullable();
            ######
            $table->integer('status_pindahan')->default(0);
            $table->text('alasan_pindah')->nullable();
            ######
            $table->string('diterima_di_kelas')->nullable();
            $table->string('diterima_pada_tanggal')->nullable();
            $table->string('bidang_keahlian')->nullable();
            $table->string('program_keahlian')->nullable();
            $table->string('keahlian')->nullable();
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
            // H. ket peserta didik
            $table->string('kesenian')->nullable();
            $table->string('olahraga')->nullable();
            $table->string('organisasi')->nullable();
            $table->string('lainnya')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('keterangan_prestasi')->nullable();
            // I. ket perkembangan peserta didik
            $table->year('tahun_menerima_beasiswa_1')->nullable();
            $table->string('kls_menerima_beasiswa_1')->nullable();
            $table->string('beasiswa_dari_1')->nullable();
            $table->year('tahun_menerima_beasiswa_2')->nullable();
            $table->string('kls_menerima_beasiswa_2')->nullable();
            $table->string('beasiswa_dari_2')->nullable();
            $table->year('tahun_menerima_beasiswa_3')->nullable();
            $table->string('kls_menerima_beasiswa_3')->nullable();
            $table->string('beasiswa_dari_3')->nullable();
            ######
            $table->integer('status_meninggalkan_sekolah')->default(0);
            $table->date('tanggal_meninggalkan_sekolah')->nullable();
            $table->string('alasan_meninggalkan_sekolah')->nullable();
            ######
            $table->year('tahun_kelulusan')->nullable();
            $table->string('no_ijazah_lulus')->nullable();
            $table->date('tanggal_ijazah_lulus')->nullable();
            $table->string('no_skhun_lulus')->nullable();
            $table->date('tanggal_skhun_lulus')->nullable();
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
        Schema::dropIfExists('data_students');
    }
};
