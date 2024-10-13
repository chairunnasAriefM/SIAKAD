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
        Schema::create('prasyarat', function (Blueprint $table) {
            $table->string('id_prasyarat', 10)->primary();
            $table->string('mk_prasyarat', 35);
            $table->integer('semester');
            $table->integer('jumlah_sks');
            $table->timestamps();
        });

        Schema::create('matakuliah', function (Blueprint $table) {
            $table->string('kd_mk', 10)->primary();
            $table->string('kd_ruang', 10);
            $table->string('nama_mk', 35);
            $table->integer('semester');
            $table->integer('jumlah_sks');
            $table->string('prasyarat', 10)->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('kd_ruang')->references('kd_ruang')->on('ruang_kuliah')->onDelete('cascade');
            $table->foreign('prasyarat')->references('id_prasyarat')->on('prasyarat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
        Schema::dropIfExists('prasyarat');
    }
};
