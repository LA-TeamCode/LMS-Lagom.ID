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
        Schema::create('foto_akhir_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id')->foreign('siswa_id')->references('id')->on('siswa');
            $table->string('foto_akhir')->default('default-user.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_akhir_siswa');
    }
};
