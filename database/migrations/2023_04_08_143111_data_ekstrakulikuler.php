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
        Schema::create('data_ekstrakulikuler', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreignUuid('semester_id')->references('id')->on('semester');
            $table->foreignUuid('ekstrakulikuler_id')->references('id')->on('ekstrakulikuler');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ekstrakulikuler');
    }
};
