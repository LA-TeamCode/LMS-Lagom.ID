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
        Schema::create('data_entry_mapel', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->integer('id_komli');
            $table->string('kelompok');
            $table->integer('pelajaran_ke');
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
