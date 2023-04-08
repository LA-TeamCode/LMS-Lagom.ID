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
        Schema::create('ekstrakulikuler', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_ajaran_id')->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajaran');
            $table->integer('semester_id')->foreign('semester_id')->references('id')->on('semester');
            $table->string('ekstrakulikuler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakulikuler');
    }
};