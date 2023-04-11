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
        Schema::create('mitra_perusahaan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('kota')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('tahun_gabung')->nullable();
            $table->string('standar')->nullable();
            $table->string('file_mou')->nullable();
            $table->boolean('status_mou')->default(false);
            $table->boolean('status_umkm')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra_perusahaan');
    }
};
