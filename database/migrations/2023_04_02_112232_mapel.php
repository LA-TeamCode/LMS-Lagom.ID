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
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_ajaran_id')->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajaran');
            $table->integer('jurusan_id')->foreign('jurusan_id')->references('id')->on('jurusan');
            $table->string('mata_pelajaran');
            $table->string('kelompok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapel');
    }
};
