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
        Schema::create('keahlian', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('bidang_keahlian');
            $table->string('program_keahlian');
            $table->string('paket_keahlian');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keahlian');
    }
};
