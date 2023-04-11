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
        Schema::create('data_mata_pelajaran', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mapel_id')->references('id')->on('mata_pelajaran');
            $table->foreignUuid('komli_id')->references('id')->on('komli');
            $table->foreignUuid('semester_id')->references('id')->on('semester');
            $table->integer('pelajaran_ke');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_entry_mapel');
    }
};
