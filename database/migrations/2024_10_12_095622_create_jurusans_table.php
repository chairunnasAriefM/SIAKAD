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
        // 1. Migration for the jurusan table
        Schema::create('jurusan', function (Blueprint $table) {
            $table->string('kd_jurusan', 10)->primary();
            $table->string('nama_jurusan', 30);
            $table->char('jenjang_pendidikan', 2);
            $table->timestamps();
        });

        // 2. Migration for the ruang_kuliah table
        Schema::create('ruang_kuliah', function (Blueprint $table) {
            $table->string('kd_ruang', 10)->primary();
            $table->string('nama_ruang', 5);
            $table->integer('kapasitas');
            $table->timestamps();
        });

        // 3. Migration for the dosen table
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nip', 10)->primary();
            $table->string('nama_dosen', 35);
            $table->char('jenis_kelamin', 1);
            $table->string('alamat', 50);
            $table->string('email', 30);
            $table->string('telepon', 12);
            $table->timestamps();
        });

        // 4. Migration for the mahasiswa table
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 11)->primary();
            $table->string('kd_jurusan', 10);
            $table->string('kd_ruang', 10)->nullable();
            $table->string('nip', 10)->nullable();
            $table->string('nama_mahasiswa', 35);
            $table->char('jenis_kelamin', 1);
            $table->integer('angkatan');
            $table->string('alamat', 50);
            $table->string('email', 30);
            $table->string('telepon', 12);
            $table->timestamps();

            // Foreign keys
            $table->foreign('kd_jurusan')->references('kd_jurusan')->on('jurusan')->onDelete('cascade');
            $table->foreign('kd_ruang')->references('kd_ruang')->on('ruang_kuliah')->onDelete('set null');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('set null');
        });

        // 5. Migration for the matakuliah table
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
        });

        // 6. Migration for the prasyarat table
        Schema::create('prasyarat', function (Blueprint $table) {
            $table->string('id_prasyarat', 10)->primary();
            $table->string('mk_prasyarat', 35);
            $table->integer('semester');
            $table->integer('jumlah_sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the tables in reverse order to maintain foreign key constraints
        Schema::dropIfExists('mahasiswa');
        Schema::dropIfExists('matakuliah');
        Schema::dropIfExists('prasyarat');
        Schema::dropIfExists('dosen');
        Schema::dropIfExists('ruang_kuliah');
        Schema::dropIfExists('jurusan');
    }
};
