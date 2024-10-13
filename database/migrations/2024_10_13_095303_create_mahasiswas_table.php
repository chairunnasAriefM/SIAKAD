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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 11)->primary();
            $table->string('kd_jurusan', 10);
            $table->string('kd_ruang', 10)->nullable();
            $table->string('nip', 10)->nullable();
            $table->string('nama_mahasiswa', 35);
            $table->char('jenis_kelamin', 1);
            $table->integer('angkatan');
            $table->string('alamat', 100);
            $table->string('email', 100);
            $table->string('telepon', 12);
            $table->timestamps();

            // Foreign keys
            $table->foreign('kd_jurusan')->references('kd_jurusan')->on('jurusan')->onDelete('cascade');
            $table->foreign('kd_ruang')->references('kd_ruang')->on('ruang_kuliah')->onDelete('set null');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
